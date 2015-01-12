<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Base {

 public function before(){
   parent::before();
$this->template->styles[]='media/css/style.css';
   
 }
	public function action_index()
	{
    
    $products=array('товар5'=>'500 у.е.');
    $content=view::factory('templates/v_index', array('products'=>$products));
    $this->template->content=$content;
	}

} // End Welcome
