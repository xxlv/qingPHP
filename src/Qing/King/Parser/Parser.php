<?php
namespace Qing\King\Parser;

class Parser{

    /**
     * 获取资源
     *
     * @param $req
     */
    public static function parse($req){
        //获取解析资源对象
        return self::fillR(R::newSelf($req));

    }

    /**
     * 填充一个可操作的R对象
     *
     * @param R $r
     * @return R
     */
    private static function fillR(R $r){

        $req=$r->getReq();
        //解析开始
        //TODO 开始解析Req

        //解析完毕
        return $r;
    }

}