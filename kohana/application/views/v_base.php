<html>
  <head>
    <title>
<?=$title?>

    </title>
      <meta>
<?foreach ($styles as $one):?> 
<?=HTML::style($one);?>
<?endforeach;?>   
<?foreach ($scripts as $one):?> 
<?=HTML::script($one);?>
<?endforeach;?> 
  </head>
      <body>
      <?=html::anchor('index', 'О компании', array('class'=>'link'));?>
      <?=html::anchor('dostavka', 'Доставка', array('class'=>'link'));?>
      <?=html::anchor('otzyvy', 'Отзывы', array('class'=>'link'));?>
        <h1><?=$site_name?></h1>
          <div class= 'main'>
          </div>
              <?=$content;?>
      </body>
</html>