<?php
namespace Qing\Util;

use Qing\Mvc\Http\HttpReq;

class Comm{

    public static function makeReqId(HttpReq $req){

        return 'Qing#'.md5(md5($req->getRequestUri())).time();
    }


}