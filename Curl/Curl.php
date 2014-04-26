<?php
/**
 * php Curl class for GET, PUT, POST, DELETE  Api call
 *
 * @author Nicola Pietroluongo
 * @github https://github.com/niklongstone
 *
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
        
        return $this;
    }
    
    public function setUrl($url)
    {
        curl_setopt($this->ch, CURLOPT_URL, $url); 
        
        return $this;
    }
  
    public function get()
    {
        curl_setopt ($this->ch, CURLOPT_HTTPGET, 1); 
        
        return $this;
    }

    public function put(Array $data)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-HTTP-Method-Override: PUT'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
        return $this;
    }

    public function post(Array $data)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
        return $this;
    }

    public function delete()
    {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        
        return $this;
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