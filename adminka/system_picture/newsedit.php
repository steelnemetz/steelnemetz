<?php

  error_reporting(E_ALL & ~E_NOTICE);

  // Устанавливаем соединение с базой данных
  require_once("../../config/config.php");
  // Подключаем блок авторизации
  require_once("../authorize.php");
  // Подключаем классы формы
  require_once("../../config/class.config.dmn.php");
  require_once("../utils/top.php");
  // Предотвращаем SQL-инъекцию
  $_GET['id'] = intval($_GET['id']);

  try
 {	
  $query= "SELECT * FROM $tbl_photos WHERE id=".$_GET['id'];
  $news=mysql_query($query);
  if(!$news)
	{
	exit($query);
	}
	$pic=mysql_fetch_array($news);
	if(empty($_POST))
		{
		$_REQUEST=$pic;
		}
	$name=new field_text("name",название, true,$_REQUEST['name']);
	$body=new field_textarea("body",описание, true,$_REQUEST['body']);
	$form=new form(array('name'=>$name,'body'=>$body),'Редактировать','field');
	
	if(!empty($_POST))
	{
	$error=$form->check();
	if(!$error)
	{
	
	$query="UPDATE $tbl_photos SET name='{$form->fields['name']->value}', body='{$form->fields['body']->value}' WHERE id=".$_GET['id'];
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
