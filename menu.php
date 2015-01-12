<?php
	require_once("templates/top.php");
	$id = (int)$_GET['id'];
  $query= "SELECT * FROM $tbl_menu WHERE showhide='show' AND catid = $id";
  $news=mysql_query($query);
  if(!$news)
	{
	exit($query);
	}
	
	WHILE ($pic=mysql_fetch_array($news))
	{
		
		echo "<div class='pic'>";
		echo $pic['name'];
    echo "<form action='new_order.php' method='POST'>";
    echo "<input type='number' value=1 name='".$pic['id']."' class='cart_int'>";
    echo "<button type='submit' class='btn btn-default mybtn' href='new_order.php?id=".$pic['id']."'>
    <span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span>
    </button>";
    echo "</form>";
		if($pic['picture'])
			{
			echo "<a class='click_modal' href='media/food/".$pic['picture']."' data=".$pic['id']."/>";
			echo "<img src='media/food/".$pic['picturesmall']. "'/>";
			
			echo "</a>";
			}
			
		echo "</div>";
	}	
					
		
require_once("templates/bottom.php");
?>


<script>
$(function(){

//$('.menutop a:eq(0)').mouseover(function(){
//    $('.header').css({'background':'orange'});
//});
  
  //modal window
   var fx={"initModal":function()
   {
   if($('.modal-window').length==0)
    {
    $('<div>').attr('id','jquery-overlay').fadeIn('fast').appendTo('body')
    
    return $('<div>').addClass('modal-window').appendTo('body');
    }
      else
      {
      return $('.modal-window');
      }
    }
   }
   
  $('.pic a.click_modal').bind('click', function(e){
    e.preventDefault(); 
    var data=$(this).attr('data');
    var modal=fx.initModal();
    $('<a>').attr('href','#').addClass('modal-close-btn').html(' ').click(function(e)
              {
              e.preventDefault();
              $('#jquery-overlay').fadeOut('fast',function()
                  {
                  $(this).remove();
                  });
              $(modal).remove();
              })
              .appendTo(modal);
    $.ajax({
          type:'POST', 
          url:'ajax.menu.php',
          data:'id='+data,
          //beforeSend:function()
          //            {
          //           modal.append('Загрузка...');
          //            },
          success:function(data)
                      {
                      modal.append(data);
                      },
          error:function(msg)
                      {
                      modal.append(msg);
                      }
          });
  });
});
</script>