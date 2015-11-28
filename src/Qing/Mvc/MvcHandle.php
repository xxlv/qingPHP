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
     * ----------------------------------------
     *  执行R,R是一个请求的资源封装，包含了所有信息
     *  首先获取配置信息 全局配置信息+模块配置信息
     *  根据路由解析请求获取module的path，检查path是否在module的config中定义，
     *  --已经定义，则执行module下的Boot的init方法
     *  --尚未定义，则抛出模块加载异常，执行终止
     *
     *  1 执行完毕init方法，将模块配置信息挂在到当前模块上
     *  2 继续执行dispatch方法，执行action并获得viewModel
     *  3 将viewModel注入到view中
     *  4 返回响应的html
     *  5 html继续返回
     * ----------------------------------------
     *
     *
     * @param R $r
     */
    public function exec(R $r){
        //TODO get config
//        $module_map=Config::get('module');
        //将路由解析到文件
        $config= Config::$config;
        var_dump($config);
        exit;
        //include file
        //将配置的path完成自动名称空间的注入
        //然后执行action



    }



}
