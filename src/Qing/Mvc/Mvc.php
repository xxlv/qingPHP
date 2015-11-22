<?php
namespace Qing\Mvc;

use Qing\Mvc\Boot\Boot;
use Qing\R;
use Qing\Mvc\Http\HttpRes;

class Mvc{

    public static function dispatch(){

    }

    /**
     *
     * @param R $r
     * @return HttpRes
     */
    public static function makeRes(R $r){
        //解析r
        //todo checkR
        //将R转换为一个Res 此工作要交给一个人完成
        return Boot::makeRes($r);
    }

    public  static function doneWith(HttpRes $res){
        //TODO
        return 'done';

    }


}
