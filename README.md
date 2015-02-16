PHP Rest Client
---

Includes a Curl class that provides a basic implementation for cURL

sample:

$curlApi = new Curl();

$result =  $curlApi->setHeader($headers)
                ->setUrl($url)
                ->get()
                ->execute();
