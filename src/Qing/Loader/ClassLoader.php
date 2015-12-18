<?php
namespace Qing\Loader;


class ClassLoader {

    public static function loadClassByName($className){

        return FileLoader::load($className);
    }




}