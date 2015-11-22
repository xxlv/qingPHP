<?php
namespace Qing;

use Qing\King\Itf\IObj;
use Qing\Mvc\Http\HttpReq;

/**
 * 解析完毕的资源
 *
 * @package Qing\King\Parser
 */
class R implements IObj{


    private $id;//请求id 唯一生成
    private $req;//请求
    private $res;//响应
    private $type;//GET|POST|PUT|DELETE
    private $path;//请求的路径
    private $module;//请求的module
    private $controller;//请求的controller
    private $action;//请求的action
    private $params;//携带参数
    private $http_server;//http信息



    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHttpServer()
    {
        return $this->http_server;
    }

    /**
     * @param mixed $http_server
     */
    public function setHttpServer($http_server)
    {
        $this->http_server = $http_server;
        return $this;

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
        return $this;
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
        return $this;

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
        return $this;

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
        return $this;

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
        return $this;

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
        return $this;

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
        return $this;

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
        return $this;

    }


    public static function newSelf()
    {
        return new R();
    }

    public static function delSelf()
    {
        // TODO: Implement delSelf() method.
    }
}