<?php

$qing_path='../src';

//load Autoloader
require_once $qing_path.'/Qing/Loader/AutoLoader.php';

$loader=new \Qing\Loader\AutoLoader();

$loader->autoLoader($qing_path);

//run application
\Qing\Mvc\Enchanter::run();


