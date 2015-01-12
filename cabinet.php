<?php
		require_once("templates/top.php");
		if($_SESSION ['id_user_position'])
		{
		echo "<h2>Кабинет:".$sess_user_arr['login']."</h2>";

				if(empty($_POST))
			{
			$_REQUEST=$sess_user_arr;
			$_REQUEST['thispass']=$thispass;
			$_REQUEST['newpass']=$pass;
			$_REQUEST['passagain']=$passagain;
			}
			
			
		$thispass=new field_text("thispass", "Текущий пароль", true, $_REQUEST['thispass']);
		$pass=new field_password("newpass", "Новый пароль", true, $_REQUEST['pass']);
		$passagain=new field_password("passagain", "Повторите пароль", true, $_REQUEST['passagain']);
		$email=new field_text_email("email", "Электронная почта", true, $_REQUEST['email']);
		$form=new form(array("thispass"=>$thispass, "pass"=>$pass, "passagain"=>$passagain,"email"=>$email),"Сохранить","field");
		
		if($_POST)
		{
			$error=$form->check();
			if($form->fields['newpass']->value!=$form->field['passagain']->value)
			{
			if(!$error)
				{
				foreach($error as $err);
				}
			}
			if(!$error)
			{
			$query="UPDATE $tbl_user SET password='{$form->fields['newpass']->value}',email='{$form->fields['email']->value}' WHERE id=".$_SESSION ['id_user_position'];
			$cat=mysql_query($query);
			}	
			if (!$cat)
				{
				exit($query);
				}
?>	
	<script>
	document.location.href="login.php";
	</script>
<?php
		}
		$form->print_form();
		}
		else
			{
			echo "Ошибка ввода";	
			}		
		
		
		
		
		
		
		
		
		
		
		
		
		
		require_once("templates/bottom.php");
?>