<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
	$products=Model::factory('catalog')->all_products();
  echo Debug::vars($products);
	}

} // End Welcome
