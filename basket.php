<?php
	require_once("templates/top.php");
?>  

<table width=100% class="table">
<tr>
    <th width=200px>Изображение</th>
    <th>Товар</th>
    <th>Цена</th>
    <th>Количество</th>
    <th>Сумма</th>
    <th>Действие</th>
</tr>

<?php    
$all=0; 
  foreach($_COOKIE as $key=>$value)
    {
    $key=(int)$key;
    if($key>0)
      {
   
     
    $query="SELECT * FROM $tbl_menu WHERE id=$key";
      $cat=mysql_query($query);
        if(!$cat)
            {
            exit($query);
            }
           
    while($tovs=mysql_fetch_array($cat))
        {
        $summa=(int)$tovs['price']*$value;
        $all=$summa+$all;
        if($tovs['picture'])
          {
          $pic="<img src='media/food/".$tovs['picturesmall']."'/>";
          }
          else
              {
              $pic='???';
              }
          echo "<tr>
            <td>$pic</td> 
            <td>".$tovs['name']."</td>
            <td>".$tovs['price']."</td>
            <td><form action='basket_edit.php?id=$key' method='POST'> 
            <input type ='number' value='$value' name='tov' class='input_number' />
            <input type ='submit' value='Обновить'/></form>
            </td>
            <td>$summa</td>
            <td>
            <a class='btn btn-danger' href='basket_del.php?id=$key'>Удалить</a>
            </td>
            </tr>";
        }
      
    }
  
  }  
 
  echo"<tr>
            <td colspan=4><h3>Итого:</h3></td>
            <td colspan=2><h3>$all</h3></td>
       </tr>";
       
  $name=new field_text("name", "ФИО",true, $_POST["name"]);
  $phone=new field_text("phone","Телефон",true, $_POST["phone"]);
  $adres=new field_text("adres","Адрес",true, $_POST["adres"]);
  
  $message=new field_textarea("message","Сообщение", false, $_POST["message"]);

  $form=new form(array("name"=>$name, "phone"=>$phone, "adres"=>$adres, "message"=>$message),"Заказать");
if(isset($_POST))
  {

  $error=$form->check();
    if(!$error)
      {
      $query="INSERT INTO $tbl_zakazs VALUES (NULL, '{$form->fields['name']->value}','{$form->fields['phone']->value}','{$form->fields['adres']->value}', '".serialize($_COOKIE)."', '".$_SERVER['REMOTE_ADDR']."', 'Курьер', 'BYR', 0, NOW(), 'new', '{$form->fields['message']->value}' )";
        $cat=mysql_query($query);
    if(!$cat)
      {
      exit ($query);
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
?>
</table>

<?php
  
  
  
  
  
  
  
  
  
  require_once("templates/bottom.php");