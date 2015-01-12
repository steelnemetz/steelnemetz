<?php
	require_once("templates/top.php");
	
  $query= "SELECT * FROM $tbl_photos WHERE showhide='show'";
  $news=mysql_query($query);
  if(!$news)
	{
	exit($query);
	}
	
	WHILE ($pic=mysql_fetch_array($news))
	{
		
		echo "<div class='pic'>";
		if($pic['picture'])
			{
			echo "<a href='media/images/".$pic['picture']."' data=".$pic['id'].">";
			echo "<img src='media/images/".$pic['picturesmall']."'/>";
			echo "</a>";
			}
		echo "<div class='pictitle'>";
		echo $pic['name'];
		echo "</div>";
	

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
   
  $('.pic a').bind('click', function(e){
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
          url:'ajax.php',
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
