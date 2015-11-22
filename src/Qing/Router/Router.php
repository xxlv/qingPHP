<?php
namespace Qing\Router;

class Router {


    public static function findAction($path){
        return 'index';
    }
    public static function findModule($path){
        return 'Default';
    }
    public static function findController($path){
        return 'Index';
    }

}