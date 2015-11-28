<?php
namespace Qing\Loader;

/***
 * Class FileLoader
 *
 * @package Qing\Loader
 */
class FileLoader{

    public static function load($name,$once=false){

        if($once){
            return include_once($once);
        }
        return include($name);
    }

}