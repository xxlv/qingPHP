<?php
namespace Qing\Loader;

/***
 * Class FileLoader
 *
 * @package Qing\Loader
 */
class FileLoader{


    /**
     *
     *
     * @param $name
     * @param bool|false $once
     * @return mixed
     */
    public static function load($name,$once=false){
        return include_once $name;

    }


}