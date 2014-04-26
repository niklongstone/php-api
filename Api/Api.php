<?php
/**
 * Abstract class for a generic API connection/integration
 *
 * @author Nicola Pietroluongo
 * @github https://github.com/niklongstone
 *
 **/

abstract class Api
{
    /*
     * set request headers
     *
     * @param array $headers the headers of the request
     *
     **/
    abstract public function setHeader(Array $headers);

    /**
     * the GET request
     * 
     **/
    abstract public function get();
   
   /**
     * the PUT request
     *
     * @param array $data the data sent in the PUT request
     * 
     **/
    abstract public function put(Array $data);

    /**
     * the POST request
     *
     * @param array $data the data sent in the POST request
     * 
     **/
    abstract public function post(Array $data);

    /**
     * the DELETE request
     *
     * @param array $data the data sent in the DELETE request
     * 
     **/
    abstract public function delete();
      
    /**
     * execute the request
     **/
    abstract public function execute();

    /**
     * close session and free the resource
     **/
    abstract public function closeSession();
}
