<?php
namespace Qing\Mvc\Http;

class Http{

    private static $req=null;
    private static $res=null;


    /**
     * 返回http请求
     *
     * @return null|HttpReq
     */
    public static function Req(){
        if(!self::$req){
            self::$req=new HttpReq();

        }
        return self::$req;


    }

    /**
     * TODO 返回http响应
     *
     * @return null|HttpReq
     *
     */
    public static function Res(){

        if(!self::$req){
            self::$req=new HttpReq();
        }
        return self::$req;

    }


}
