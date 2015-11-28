<?php
namespace Qing;

use Qing\Loader\FileLoader;

class Config{

    public static $config;

    /*
     *  Get Config data
     */
    public static function get($name){

        //get from name
        $config=[];
        $conf_path='./config/';

        if(file_exists($conf_path.$name)){

            $config_tmp=FileLoader::load($name);

            if(is_array($config)){
                $config=$config_tmp;
            }
        }
        return $config;
    }




    //TODO
    public static function init($conf){
        $base_conf=[];

        if(is_array($conf)){
            $base_conf=array_merge($base_conf,$conf);
        }

        self::$config=$base_conf;

    }



    //TODO
    public static function initEvn(){

    }


}