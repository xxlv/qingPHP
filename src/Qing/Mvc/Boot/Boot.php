<?php
namespace Qing\Mvc\Boot;

use Qing\Mvc\Http\HttpRes;
use Qing\Mvc\Mvc;
use Qing\Mvc\MvcHandle;
use Qing\R;

class Boot{


    /**
     * 创建一个http response
     *
     * @param R $r
     * @return HttpRes
     */
    public static function makeRes(R $r){

        return Boot::runMvc($r);
    }


    public static function runMvc(R $r){
        //mvc Handle 处理
        $mvc_handle=MvcHandle::getInstance();
        //执行R
        $mvc_handle->exec($r);

        return new HttpRes();


    }

}