<?php
namespace Qing\Parser;

use Qing\Mvc\Http\HttpReq;
use Qing\R;
use Qing\Router\Router;
use Qing\Util\Comm;

class Parser{


    public $req;

    public function __construct(HttpReq $req)
    {
        $this->setReq($req);
    }


    /**
     * 获取资源
     *
     * @param $req
     */
    public function parseAndGetR(){
        //获取解析资源对象
        return $this->fillR(R::newSelf());

    }

    /**
     * 填充一个可操作的R对象
     *
     * @param R $r
     * @return R
     */
    private  function fillR(R $r){

        $req=$this->getReq();
        //fill R

         $r->setId(Comm::makeReqId($req))
            ->setController($this->getController())
            ->setAction($this->getAction())
            ->setModule($this->getModule())
            ->setPath($this->getPath())
            ->setType($this->getType())
            ->setRes($this->getRes())
            ->setParams($this->getParams())
            ->setHttpServer($this->getHttpServer());

        return $r;
    }

    private function getModule(){
        return Router::findModule($this->getPath());
    }

    private function getController(){
        return Router::findController($this->getPath());
    }

    private function getAction(){
        return Router::findAction($this->getPath());
    }

    private function getPath(){
        return $this->getReq()->getRequestUri();
    }

    private function getType(){
        return $this->getReq()->getRequestMethod();
    }
    private function getRes(){
        return null;
    }

    private function getParams(){
        return $_REQUEST;
    }
    private function getHttpServer(){
        return $_SERVER;
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


}