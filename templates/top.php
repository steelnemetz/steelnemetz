<?php
session_start();
require_once("config/config.php");
require_once("config/class.config.php");
if ($_SESSION ['id_user_position'])
	{
	$query="SELECT * FROM $tbl_user WHERE id=".$_SESSION['id_user_position'];
	$sess_user=mysql_query($query);
	if(!$sess_user)
	{
	exit($query);
	}
$sess_user_arr=mysql_fetch_array($sess_user);
	}


?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Пеперони </title>
		<meta name='description' content="главная">
		<meta name='keywords content'='пеперони'>
		<link type="text/css"	href="media/bootstrap/css/bootstrap.min.css"	rel="stylesheet" />
    <link type="text/css"	href="media/css/style.css"	rel="stylesheet" />
    
    <script src='media/js/jquery.min.js'></script>
	</head>
	<body>
		<div class="header">
			<img src="media/img/logo1.jpg"
				class="logo"/>
		</div>
		
		<div class="menutop">
		<a href="index.php"> Главная </a>
		<a href="index.php?url=contacts"> Контакты </a>
		<a href="galery.php"> Фотогалерея </a>
		</div>
		
		<div class="col-md-2">
		<br />
		
		
<?
$query="SELECT * FROM $tbl_categories WHERE showhide='show'";
$news=mysql_query($query);
  if(!$news)
	{
	exit($query);
	}
	
	WHILE ($pic=mysql_fetch_array($news))
	{
 
			echo "<p><a href='menu.php?id=".$pic['id']."' class='button'>";
			echo $pic['name'];
			echo "</a></p>";
 
	}	
		
?>
		
					
				</div>
				
		</div>
		
		<div class="col-md-8">