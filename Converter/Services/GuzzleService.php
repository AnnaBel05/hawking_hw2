<?php 

namespace Services;

require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

class GuzzleService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getClient() 
    {
        return $this->client;
    }

    public function getRates()
    {
        static $rates;

        if ($rates === null)
        {
            $rates = $this->client->request('GET', 
            'https://www.cbr-xml-daily.ru/daily_json.js')->getBody();
        }

        return $rates;
    }
}

//uri: https://www.cbr-xml-daily.ru/daily_json.js

?>