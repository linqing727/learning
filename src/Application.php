<?php
/***************************************************************************
*
* Copyright (c) 2017 lqq, Inc. All Rights Reserved
*
***************************************************************************/



/**
* file Application.php
* author lqq
* date 2017-07-04 16:09
* brief: 
*
**/

namespace Lqq;

use Lqq\Config\Logset;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


require __DIR__ . '/../vendor/autoload.php';
$loggerModel = new Logger('test');  
  
$log = new Logger('name');  
$log->pushHandler(new StreamHandler('monolog.txt', Logger::WARNING));

$log->addWarning('Foo',array('Foo is null!'));  
$log->addError('Bar');
$log_obj = new Logset();
$ret = $log_obj->testWrite("this is bbbbb");
$log->addWarning($ret);

class Application {
     public function __construct(){
	 
	 }
	 public function checkMonolog(){
	    
	 }
}
