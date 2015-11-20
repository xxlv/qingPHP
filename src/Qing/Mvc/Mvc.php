<?php
namespace Qing\Mvc;

use Qing\King\Parser\R;
use Qing\Mvc\Http\HttpRes;

class Mvc{

    public static function dispatch(){

    }

    /**
     * push一个R到这里
     *
     * @param R $r
     */
    public static function push(R $r){
        //解析r
        self::dispatch();

        return new HttpRes();
    }


    public  static function DoneWith(HttpRes $res){
        //

    }


}
