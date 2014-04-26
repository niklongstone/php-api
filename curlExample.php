<?php
require('Api/Api.php');
require('Curl/Curl.php');

$headers= Array(
            'Accept-Charset: utf-8',
            'Authorization: Basic abcdefghilmnopqrst',
        );

$curlApi = new Curl();

$result =  $curlApi->setHeader($headers)
                ->setUrl('http://www.thomas-bayer.com/sqlrest/CUSTOMER')
                ->get()
                ->execute();

echo $result;