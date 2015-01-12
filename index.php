<?php
		require_once("templates/top.php");
		
	if($_GET['url'])
	{
	$file=$_GET['url'];
	}	
		else
		{
		$file='index';
		}
		
	$query=" SELECT*FROM $tbl_maintext WHERE url='$file'";
	$cat=mysql_query($query);
	if(!$cat)
	{
	exit($query);
	}
	$tov=mysql_fetch_array($cat);
		
?>
			<h2>
<?php
			echo $tov["name"];
?>
			</h2>
			<div class="mainblock">
<?php
			echo $tov["body"];
			
?>
		</div>
<?php
		require_once("templates/bottom.php");
?>