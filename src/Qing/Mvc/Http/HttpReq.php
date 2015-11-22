<?php

namespace Qing\Mvc\Http;
use Qing\King\Itf\IObj;
use Qing\King\Itf\TraitObj;


/**
 * TODO
 *
 * @package Qing\Mvc\Http
 */
class HttpReq implements IObj{


    private $_conf;
    private $_request_uri;
    private $_request_method;
    private $_server_name;



    public function __construct()
    {
        $this->autoInit();
    }

    /**
     * @return mixed
     */
    public function getServerName()
    {
        return $this->_server_name;
    }

    /**
     * @param mixed $server_name
     */
    public function setServerName($server_name)
    {
        $this->_server_name = $server_name;
    }

    /**
     * @return mixed
     */
    public function getConf()
    {
        return $this->_conf;
    }

    /**
     * @param mixed $conf
     */
    public function setConf($conf)
    {
        $this->_conf = $conf;
    }

    /**
     * @return mixed
     */
    public function getRequestUri()
    {
        return $this->_request_uri;
    }

    /**
     * @param mixed $request_uri
     */
    public function setRequestUri($request_uri)
    {
        $this->_request_uri = $request_uri;
    }

    /**
     * @return mixed
     */
    public function getRequestMethod()
    {
        return $this->_request_method;
    }

    /**
     * @param mixed $request_method
     */
    public function setRequestMethod($request_method)
    {
        $this->_request_method = $request_method;
    }



    private function autoInit(){

        $this->setRequestMethod(strtoupper($_SERVER['REQUEST_METHOD']));

        $this->setRequestUri($_SERVER['REQUEST_URI']);

        $this->setServerName($_SERVER['SERVER_NAME']);

    }
    public static function newSelf()
    {
        // TODO: Implement newSelf() method.
    }

    public static function delSelf()
    {
        // TODO: Implement delSelf() method.
    }

}