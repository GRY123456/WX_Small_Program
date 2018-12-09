<?php
namespace app\index\controller;
include 'Test.php';

Class Abc{
  public function abc(){
    $get_class = new Test();
	$content  = $get_class->getWeather('北京');
  }
}