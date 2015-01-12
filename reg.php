<?php
	require_once("templates/top.php");
	$login=new field_text("login", "логин",true, $_POST["login"]);
	$pass=new field_password("pass","пароль",true, $_POST["pass"]);
	$passagain=new field_password("passagain","пароль",true, $_POST["passagain"]);
	$email=new field_text_email("email","электронная почта", true, $_POST["email"]);
	$form=new form(array("login"=>$login, "pass"=>$pass, "passagain"=>$passagain, "email"=>$email),"Регистрация","field");
	
	if($_POST)
{
	$error=$form->check();
	if ($form->fields['pass']->value!=$form->fields['passagain']->value)
	{
	$error[]="Пароли не совпадают";
	}
	$query="SELECT COUNT(*)FROM $tbl_user WHERE login='{$form->fields['login']->value}'";
	$usr=mysql_query($query);
	if(!$usr)
		{
		exit($query);
		}
		
	if(mysql_result($usr,0))
		{
		$error[]="Такой логин уже существует";
		}
		
		if(!$error)
		{
			
		$query="INSERT INTO $tbl_user VALUES(NULL,'{$form->fields['login']->value}','{$form->fields['pass']->value}','{$form->fields['email']->value}','unblock', NOW(), NOW())";	
	$cat=mysql_query($query);
	if (!$cat)
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
		foreach($error as $err);
		{
		echo "<span style='color:red'>";
		echo $err;
		echo "</span><br/>";
		}
	}
}
	$form->print_form();
			
require_once("templates/bottom.php");
?>