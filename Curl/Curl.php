<?php
/**
 * php Curl class for generic Api call
 **/

class Curl extends Api 
{
    private $ch;

    public function __construct() 
    {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }
        
    public function setHeader(Array $headers) 
    {
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
    }
    
    public function setUrl($url) 
    {
        curl_setopt ($this->ch, CURLOPT_URL,$url); 
    }

    public function execute() 
    {
        $result = curl_exec($this->ch); 
        return $result;
    }

    public function closeSession()
    {
        curl_close($this->ch);
    }
}
