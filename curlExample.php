<?php
require('Api/Api.php');
require('Curl/Curl.php');

class ApiExample {
    private $api;
    
    /**
     * construct the class and set the headers
     **/
    public function __construct(Api $api)
    {
        $this->api = $api;

        $headers= Array(
            'Accept-Charset: utf-8',
            'Authorization: Basic abcdefghilmnopqrst',
        );
        $this->api->setHeader($headers);
    }

    public function requestOne()
    {
        return $this->api->execute();
    }

    public function setUrl($url)
    {
        $this->api->setUrl($url);
    }
}

$curlApi = new Curl();
$apiRequest = new ApiExample($curlApi);
$apiRequest->setUrl('http://www.urltoapi.com/param1/param2');
$apiRequest->requestOne();

