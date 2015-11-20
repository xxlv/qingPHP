<?php
namespace Qing\Mvc;

use Qing\King\Parser\Parser;
use Qing\Mvc\Http\Http;

/**
 *
 * 负责打点一切
 *
 * @package Qing\Mvc
 */
class Enchanter{

    /**
     * TODO IMPLEMENTS THIS
     * Mvc启动
     *
     */
    public static function run(){
        //初始化环境
        self::init();
    }


    /**
     * TODO IMPLEMENTS THIS
     * 初始化环境
     *
     */
    private static function init(){

        #Config::init();
        //假设配置初始化完成了，现在开始
        echo 'init';

        //1获取Http请求对象
        //2解析请求头
        $req=Http::Req();

        $r=Parser::parse($req);


        //push $r到MVC内部 将生成一个res 由doneWith方法完成此次后续任务
        return Mvc::DoneWith(Mvc::push($r));
    }



}