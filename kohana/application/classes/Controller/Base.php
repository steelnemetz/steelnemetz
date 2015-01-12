<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

public $template='v_base';

 public function before(){
   parent::before();
   $config=kohana::$config->load('conf');
   
   $this->template->title=$config->get('title');
   $this->template->keywords=$config->get('keywords');
   $this->template->description=$config->get('description');
   $this->template->site_name=$config->get('site_name');
   $this->template->styles=array ('media/bootstrap/css/bootstrap.min.css');
   $this->template->scripts=array ('media/bootstrap/js/bootstrap.min.js');
   
 }
	public function action_index()
	{
  $id=$this->request->param('id');
  if(!$id)
    {
    $id='index';
    }
  $text=ORM::factory('maintext')-> where('url', '=', $id)->find();
  $content=view::factory('templates/v_index')->bind('text',$text);
  $this->template->content=$content;
	}

} // End Welcome
