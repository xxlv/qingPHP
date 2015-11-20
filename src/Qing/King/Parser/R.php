<?php
namespace Qing\King\Parser;

use Qing\King\Itf\IObj;
use Qing\King\Itf\TraitObj;
use Qing\Mvc\Http\HttpReq;

/**
 * 解析完毕的资源
 *
 * @package Qing\King\Parser
 */
class R implements IObj{

    use TraitObj;

    private $id;//请求id 唯一生成
    private $req;//请求
    private $res;//响应
    private $type;//GET|POST|PUT|DELETE
    private $path;//请求的路径
    private $module;//请求的module
    private $controller;//请求的controller
    private $action;//请求的action
    private $params;//携带参数
    private $http;//http信息

    public function __construct(HttpReq $req)
    {
        $this->setReq($req);

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReq()
    {
        return $this->req;
    }

    /**
     * @param mixed $req
     */
    public function setReq($req)
    {
        $this->req = $req;
    }

    /**
     * @return mixed
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * @param mixed $res
     */
    public function setRes($res)
    {
        $this->res = $res;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param mixed $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }


    public static function newSelf($req)
    {
        return new R($req);
    }

    public static function delSelf()
    {
        // TODO: Implement delSelf() method.
    }
}