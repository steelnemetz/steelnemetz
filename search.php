<?php
require_once("templates/top.php");

if($_POST)
   {
   if($_POST['name'])
      {
      $tmp1= "AND name LIKE '%"
              .htmlspecialchars(trim($_POST['name']))
              ."%'";
      }
   }
if($_POST['category']!=0)
  {
  $tmp2="AND catid =".(int)$_POST['category'];
              
  }
if($_POST['cena_ot'])
  {
  $tmp3="AND price >".(int)$_POST['cena_ot'];
  }
if($_POST['cena_do'])
  {
  $tmp4="AND price <".(int)$_POST['cena_do'];
  }  
 
$query="SELECT * FROM $tbl_menu WHERE id>0 $tmp1 $tmp2 $tmp3 $tmp4";
  
  $cat=mysql_query($query);
  if(!$cat)
    {
    exit($query);
    }
?>
<table class='table simple-little-table' width=100%>
  <tr>
      <td>Изображение</td>
      <td>Описание</td>
  </tr>
  
<?php
while($search=mysql_fetch_array($cat))
  {
  
  
if($search['picturesmall'])
  {
  $pic="<img src='media/food/".$search['picturesmall']."'/>";
  }
  else
    {
    $pic=" ";
    }
?>
<tr>
<td width=200px>
  <?=$pic?>
</td>
<td><h2><?=$search['name'];?></h2><br />

<?=$search['body'];?><br />
<b>Цена:&nbsp<?=$search['price'];?></b><br />
</td>

</tr>
<?
