<?php

  error_reporting(E_ALL & ~E_NOTICE);

  // Устанавливаем соединение с базой данных
	require_once("../../config/config.php");
  // Подключаем блок авторизации
	require_once("../authorize.php");
  // Подключаем классы формы
	require_once("../../config/class.config.dmn.php");
	require_once("../utils/top.php");
	require_once("../../utils/utils.resizeimg.php");
	
  if(empty($_POST))
  {
    // Отмечаем флажок hide
    $_REQUEST['hide'] = true;
  }
  try
  {
  
 $query="SELECT * FROM $tbl_categories WHERE showhide='show'";
$news=mysql_query($query);
  if(!$news)
	{
	exit($query);
	}
	$arr_cat = array();
	WHILE ($pic=mysql_fetch_array($news))
	{
    $arr_cat[$pic['id']] = $pic['name']; 
	}	
    $name= new field_text("name",
                                  "Название",
                                  true,
                                  $_POST['name']);
	$editor1= new field_textarea("editor1",
                                  "Содержание",
                                  true,
                                  $_POST['editor1']);
   $razdels = new field_select('razdels',
                                'Категория',
                                $arr_cat,
                                $_POST['razdels']);
	$urlpict=new field_file("urlpict", "Изображения", false, $_FILES, "../../media/food/");
    
	$form = new form(array(
	                         "name" => $name, 
	                         "razdels" => $razdels, 
                           "editor1" => $editor1,
						  "urlpict"=> $urlpict,
                           ), 
                     "Добавить",
                     "field");
					 
	if(!empty($_POST))
	{
	$error=$form->check();
	if(!$error)
	{
		$var=$form->fields['urlpict']->get_filename();
		if($var)
			{
			$picture=date("y_m_d_h_i_").$var;
			$picturesmall='s_'.$picture;
			resizeimg("../../media/food/".$picture, "../../media/food/".$picturesmall,200,200);
			}
		else
		{
		$picture="";
		$picturesmall="";
		}
			$query="INSERT INTO $tbl_menu VALUES (NULL, '{$form->fields['razdels']->value}','{$form->fields['name']->value}', '{$form->fields['editor1']->value}', '0', '$picture','$picturesmall','show',NOW())";
	$cat=mysql_query($query);
	if(!$cat)
		{
		exit($query);
		}
?>
<script>
document.location.href="index.php";
</script>
<?php
	}
	
	if($error)
	{
		foreach($error as $err)
			{
		echo "<span style='color:red'>";
		echo $err;
		echo "</span><br/>";
			}
	}
		
	}
	
?>
<div class="table_user">
<?
    // Выводим HTML-форму 
    $form->print_form();
?>
</div>
<?
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
