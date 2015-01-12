<?php
	
	require_once("templates/top.php");
	require_once("utils/utils.users.php");
	$login=new field_text("login", "логин",true, $_POST["login"]);
	$pass=new field_password("pass","пароль",true, $_POST["pass"]);
	$form=new form(array("login"=>$login, "pass"=>$pass,),"Вход","field");
	
	if($_POST)
{
	$error=$form->check();
	if(!$error)
	{
	if(enter($form->fields['login']->value, $form->fields['pass']->value))
	{
?>	
	<script>
	document.location.href="login.php";
	</script>
	
<?php
		}
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