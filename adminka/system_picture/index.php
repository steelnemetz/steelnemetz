<?php

  error_reporting(E_ALL & ~E_NOTICE);

  // Устанавливаем соединение с базой данных
  require_once("../../config/config.php");
  // Подключаем блок авторизации
  require_once("../authorize.php");
  // Подключаем SoftTime FrameWork
  require_once("../../config/class.config.dmn.php");
  // Подключаем блок отображения текста в окне браузера
  require_once("../utils/utils.print_page.php");

  // Данные переменные определяют название страницы и подсказку.
  $title = 'Блок управления фотогалереей сайта';
  $pageinfo = '<p class=help>Здесь можно добавить
               изображение, отредактировать или
               удалить уже существующее.</p>';

  // Включаем заголовок страницы
  require_once("../utils/top.php");

  try
  {
?>    
	<div class="menu_right">
	<a href = "newsadd.php"> Добавить фото </a>
	</div>
<?php	
	
  
  $page_link=3;
  $pnumber=20;
  $obj=new pager_mysql($tbl_photos, "", "ORDER BY id DESC", $pnumber, $page_link);
  $news=$obj->get_page();
  if(!empty ($news))
	{
?>
<table width=100% class="table">
	<tr class="header">
	<td width=200px> Фото </td>
	<td> Название </td>
	<td width=200px> Действие </td>
	</tr>
	
<?php
	for($i=0; $i<count($news); $i++)
		{
		if($news[$i]['picturesmall'])
			{
			$picture="../../media/images/".$news[$i]['picturesmall'];
			}
			else
				{
				$picture="../../media/images/no_photo.png";
				}

		if($news[$i]['showhide']=='show')
		{
		$showhide="<a href='newshide.php?id=".$news[$i]['id']."' title='скрыть'>
		<img src='../utils/img/folder_locked.gif' border=0 wlign='absmiddle' />Скрыть</a>";
		}
		else
			{
			$showhide="<a href='newsshow.php?id=".$news[$i]['id']."' title='отобразить'>
		<img src='../utils/img/show.gif' border=0 align='absmiddle' />Отобразить</a>";
			}
			echo "<tr>	
			<td> <img src= '$picture'/></td>
			<td> {$news[$i]['name']} <hr/>{$news[$i]['body']}</td>
			<td class='menu_right' align='left' valign='top'> <a href='#' onClick=\"delete_position('newsdel.php?id=".$news[$i][id]."','Вы хотите удалить изображение?')\" title='удалить изображение'> 
			<img border=0 src='../utils/img/editdelete.gif' align='absmiddle'  />Удалить</a>
			<a href='#' onClick=\"delete_position('newsedit.php?id=".$news[$i][id]."','Вы хотите редактировать изображение?')\" title='редактировать изображение'> 
			<img border=0 src='../utils/img/kedit.gif' align='absmiddle'  />Редактировать</a> $showhide
			</td>
			</tr>";
		}

?>	
</table>	
<?php
	}
	}
  catch(ExceptionMySQL $exc)
  {
    require("../utils/exception_mysql.php"); 
  }

  // Включаем завершение страницы
  require_once("../utils/bottom.php");

echo "";
?>