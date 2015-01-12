<?php
$dp_location="localhost";
$db_name="site";
$db_user="root";
$db_pass="";
//таблицы
$tbl_categories="categories";
$tbl_maintext="maintexts";
$tbl_menu="menu";
$tbl_user="users";
$db_con=mysql_connect($db_location, $db_user, $db_pass);
$tbl_accounts="system_accounts";
$tbl_photos="photos";
$tbl_zakazs="zakazs";
if(!$db_con)
{
exit("Сервер баз данных недоступен");
}
$db_use=mysql_select_db($db_name, $db_con);

if(!$db_use)
{
exit("База данных недоступна");
}
@mysql_query("SET NAMES 'utf8'");


