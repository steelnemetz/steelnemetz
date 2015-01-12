<h2>Отзывы</h2>

<? foreach($otzyvs as $one):?>
<h3><?=$one->fio;?></h3>
<?=$one->body;?>
<hr />
<?endforeach;?>

<?=Form::open('otzyvy', array('class'=>'form-horizontal'));?>
<p class='item'>
<?=Form::textarea('body', '', array('class'=>'ckeditor','id'=>'editor'));?>
</p>

<p class='item'>
<?=Form::input('email', '', array('placeholder'=>'Email'));?>



<?=Form::input('name', '', array('placeholder'=>'Имя'));?>
</p>
<?=Form::submit('submit', 'Отправить')?>
<?=Form::close();?>

