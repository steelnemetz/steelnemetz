<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model {
  
  public function all_products(){
    return array ('Товар 1'=>'100 у.е.',
                  'Товар 2'=>'200 у.е.',
                  'Товар 3'=>'300 у.е.',
                  'Товар 4'=>'400 у.е.',
                  );
  } 
}