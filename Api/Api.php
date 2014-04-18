<?php
/**
 * Abstract class for a generic API connection/integration
 **/

abstract class Api
{
    /*
     * set request headers
     **/
    abstract public function setHeader(Array $headers);
    
    /**
     * execute the request
     **/
    abstract public function execute();

    /**
     * set the url for request
     **/
    abstract public function setUrl($url);
    
    /**
     * close session and free the resource
     **/
    abstract public function closeSession();
}
