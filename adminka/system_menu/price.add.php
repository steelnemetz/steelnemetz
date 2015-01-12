<?php

  error_reporting(E_ALL & ~E_NOTICE);
    header("Content-Type: text/html; charset=windows-1251");
  // Устанавливаем соединение с базой данных
	require_once("../../config/config.php");
  // Подключаем блок авторизации
	require_once("../authorize.php");
  // Подключаем классы формы
	require_once("../../config/class.config.dmn.php");
	require_once("../utils/top.php");
	require_once("../../utils/utils.resizeimg.php");
	$title = 'Блок управления прайсами сайта';
  $pageinfo = '<p class=help>Здесь можно добавить
               новый прайс, отредактировать или
               удалить уже существующий.</p>';

  if(empty($_POST))
  {
    // Отмечаем флажок hide
    $_REQUEST['hide'] = true;
  }
  try
  {
  $urlpict=new field_file("urlpict", "Прайс", false, $_FILES, "../../media/price/");
  
  $form = new form(array(
	                      "urlpict"=> $urlpict), 
                     "ADD",
                     "field");
  if($_FILES)
    {
    $error=$form->check();
      if(!$error)
        {
        $var=$form->fields['urlpict']->get_filename();
            if(!empty($var))
              {
              $file=date('y_m_d_h_i_').$var;
              $dir='../../media/price/';
              $path=$dir.$file;
              $handle=fopen($path,'r');
              $data=array();
              while(!feof($handle))
                {
                $data[]=fgetcsv($handle, 1000000, '\n');
                }  
                unset($data[0]);
              foreach($data as $key=>$value)
                  {
   // mysql_query("SET NAMES 'windows-1251'");
                  $arr_value=explode(';',$value[0]);
                  
                  //$vv0=iconv('Windows-1251', 'Utf-8',trim($arr_value[0]));//категория
                  $vv1=iconv('Windows-1251', 'Utf-8',trim($arr_value[1]));//наименование
                  $vv2=iconv('Windows-1251', 'Utf-8',trim($arr_value[2]));//описание
                  $vv0=trim($arr_value[0]);//цена
                 
                  //$vv2=trim($arr_value[2]);//цена
                  $vv3=trim($arr_value[3]);//цена
                  $query="SELECT * FROM $tbl_categories WHERE name='$vv0'";
                  $query1=iconv('Windows-1251', 'Utf-8', $query);
                  $newcat=mysql_query($query1);
                  if(!$newcat)
                    {
                    exit($query);
                    }
                   if(mysql_num_rows($newcat)>0)
                    {
                    $cats=mysql_fetch_array($newcat);
                  //start
                  $query="SELECT * FROM $tbl_menu WHERE name='$vv1'";
                  $cat=mysql_query($query);
                    if(!$cat)
                      {
                      exit($query);
                      }
                    $tov=mysql_fetch_array($cat);
                    if($tov['id'])
                      {
                      $query="UPDATE $tbl_menu SET 
                      catid='".$cats['id']."',
                      name='$vv1',
                      body='$vv2',
                      price='$vv3'
                      WHERE id=".$tov['id'];
                      
                      $cat=mysql_query($query);
                      if(!$cat)
                        {
                        exit($query);
                        }
 
                    
 
                       } else {
                      $query="INSERT INTO $tbl_menu VALUES
                      (NULL, 
                      ".$cats['id'].", 
                      '$vv1',
                      '$vv2', 
                      '$vv3',
                      ' ',
                      ' ',
                      'show',
                      'NOW()')";
                      $cat=mysql_query($query);
                        if(!$cat)
                            {
                            exit($query);
                            }
                        
                       }
                       //end
                       }else{
                       echo "$vv0 - unnown category";
                       }
                  echo "<hr />";
                  }
                
              }
        }
    }
  $form->print_form();
  } 
  catch(ExceptionObject $exc) 
  {
    require("../utils/exception_object.php"); 
  }
  catch(ExceptionMySQL $exc)
  {
    require("../utils/exception_mysql.php"); 
  }
  catch(ExceptionMember $exc)
  {
    require("../utils/exception_member.php"); 
  }

  // Включаем завершение страницы
  require_once("../utils/bottom.php");
?>
