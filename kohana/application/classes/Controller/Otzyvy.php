
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Otzyvy extends Controller_Base {

 public function before(){
   parent::before();
    $this->template->styles[]='media/css/style.css';
    $this->template->scripts[]='media/ckeditor/ckeditor.js';
 }
	public function action_index()
	{
    if($_POST)
    {
     $data=Arr::extract($_POST, array('name', 'body', 'email'));
     $otz=ORM::factory('otzyv');
     $otz->fio=$data['name'];
     $otz->body=$data['body'];
     $otz->email=$data['email'];
     $otz->showhide='show';
     $otz->putdate=date('y-m-d h:i');
     $otz->ip=$_SERVER['REMOTE_ADDR'];
     $otz->save();
     $this->redirect('/');
     
    }
    $otzyvs=ORM::factory('otzyv')->where('showhide', '=', 'show')->find_all();
  
    $content=view::factory('templates/v_otzyvy')->bind('otzyvs', $otzyvs);
    $this->template->content=$content;
    
	}

} // End Welcome
