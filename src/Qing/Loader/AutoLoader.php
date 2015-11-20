<?php
namespace Qing\Loader;


/**
 *
 * 注册自动加载类
 *
 * @package Qing\Loader
 *
 */
class AutoLoader
{

    /**
     * sql注册加载
     *
     * @param $src_path
     */
    public function autoLoader($src_path)
    {

        $src_path = $src_path . '/';

        spl_autoload_register(function ($full_class) use ($src_path) {

            //将full_class字符串切割映射到文件
            $full_class = str_replace('\\', '/', $full_class);

            $file_with_path = $src_path . '' . $full_class . '.php';

            if (file_exists($file_with_path)) {

                return include $file_with_path;

            } else {

                throw new \Exception('can not found file' . $file_with_path);
            }

            return false;

        });

    }


}