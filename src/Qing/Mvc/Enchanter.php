<?php
namespace Qing\Mvc;

use Qing\Config;
use Qing\Parser\Parser;
use Qing\Mvc\Http\Http;

/**
 *
 * 负责打点一切的巫师大人
 *
 * @package Qing\Mvc
 */
class Enchanter{

    /**
     * TODO IMPLEMENTS THIS
     * Mvc启动
     *
     */
    public static function run($conf=[]){
        //初始化环境
        self::init($conf);
    }


    /**
     * TODO IMPLEMENTS THIS
     * 初始化环境
     *
     */
    private static function init($conf){

        Config::init($conf);
        //1获取Http请求对象
        //2解析请求头
        $req=Http::req();
        $parser=new Parser($req);

        //push $r到MVC内部 将生成一个res 由doneWith方法完成此次后续任务
        return Mvc::doneWith(Mvc::makeRes($parser->parseAndGetR()));


    }

}