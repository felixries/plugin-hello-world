<?php
use GuzzleHttp\Client;

$client = new Client();
$res = $client->request(
    'GET',
    'https://packagist.org/search.json',
    [
        'query' => ['q' => SdkRestApi::getParam('packagist_query')]
    ]
);

/** @return array */
return json_decode($res->getBody(), true);
