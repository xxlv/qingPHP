<?php

$qing_path='../src';

require_once $qing_path.'/Qing/Loader/AutoLoader.php';
$loader=new \Qing\Loader\AutoLoader();
$loader->autoLoader($qing_path);

\Qing\Mvc\Mvc::run();


