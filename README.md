PHP Api Classes
---

The Curl classes is also useful for Api calls or unit testing


sample:

$curlApi = new Curl();

$result =  $curlApi->setHeader($headers)
                ->setUrl($url)
                ->get()
                ->execute();
