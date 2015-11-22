<?php
namespace Qing\Mvc\Boot;

use Qing\Mvc\Http\HttpRes;
use Qing\R;

class Boot{


    /**
     * 创建一个http response
     *
     * @param R $r
     * @return HttpRes
     */
    public static function makeRes(R $r){

        //r已经检查完毕
        //TODO 需要启动执行业务逻辑
        $module=$r->getModule();

        return Boot::loadModule($module)
            ->exec($r->getController(),$r->getAction());
    }


    public static function loadModule(){

        return MvcHandle::class;


    }

}