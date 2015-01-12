</div>
		
			<div class="col-md-2">
			<br />
			<p><a href="index.php?url=dostavka" class="button">Доставка</a></p>
			<p><a href="index.php?url=otzyvy" class="button">Отзывы</a></p>
			 <br/><p><a href='basket.php'class='button'>Корзина</a></p>
<?php

		if($_SESSION['id_user_position'])
		{
			echo "Здравствуйте!,".$sess_user_arr['login'];
		
		echo "<a href='logout.php'class='button'>Выход</a>";
		echo "<a href='cabinet.php'class='button'>Кабинет пользователя</a>";
    
		}
    
		else
			{
    
      echo "<br/><p><a href='login.php'class='button'>Войти</a></p>";
			echo "<a href='reg.php' class='button'>Регистрация</a>";
     
			}
      

?>		
			<form name='filtr' action='search.php' method='POST'>
<div class="form-group">
    <div class="col-sm-12">
      <input type="search" name="name" class="form-control" id="inputSearch" placeholder="Название блюда">
      <div class="form-group">
       <br />
       <select id="disabledSelect" class="form-control" name="category">
       <option value=0>Выбрать категорию</option>
<?php 
      $query= "SELECT * FROM $tbl_categories WHERE showhide='show'";
      $tov=mysql_query($query);
      if(!$tov){
       exit($query);
      }
      while($cat=mysql_fetch_array($tov))
          {
?>
        <option value="<?echo $cat['id']?>">
        <?echo $cat['name'];?>
        </option>
<?php
          }
?>
      </select>
  </div>
  </div>
  <div class="col-sm-12">
      <input type="text" name = "cena_ot" class="form-control" id="inputCena" placeholder="Цена от">
      <br />
      <input type="text" name = "cena_do" class="form-control" id="inputCena" placeholder="Цена до">
      <br />
      <button type="submit" class="btn btn-default">Найти</button>
      <br />
      <br />
      </form>			
			</div>
			</div>

			

			
</div>
			<br style="clear:both"/>
			<div class="footer">
			&copy;Developed by Sergey Borushko, 2014&nbspг.
			</div>
	</body>
</html>
<script>
$(function(){
$(window).bind("load", function() { 

       var footerHeight = 0,
           footerTop = 0,
           $footer = $(".footer");

       positionFooter();

       function positionFooter() {

                footerHeight = $footer.height();
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

               if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                   $footer.css({
                        position: "absolute"
                   }).animate({
                        top: footerTop
                   })
               } else {
                   $footer.css({
                        position: "static"
                   })
               }

       }

       $(window)
               .scroll(positionFooter)
               .resize(positionFooter)

});
});
</script>
	