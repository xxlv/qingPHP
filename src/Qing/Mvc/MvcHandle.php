<?php
namespace Qing\Mvc;

use Qing\Config;
use Qing\R;

class MvcHandle{


    private static $_self;

    //disabled construct
    private function __construct(){}

    /**
     *
     * @return MvcHandle
     */
    public static  function getInstance(){
        if(!self::$_self){
            self::$_self=new MvcHandle();
        }
        return self::$_self;
    }

    /**
     *
     * @param R $r
     */
    public function exec(R $r){
        //TODO get config
        $module_map=Config::get('module');
    }



}
