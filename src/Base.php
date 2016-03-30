<?php

namespace correiosAPI;

use GuzzleHttp\Client;

class Base
{
    public function __construct($base_uri)
    {
        $this->guzzle = new Client(['base_uri' => $base_uri]);
    }
    public function get($url)
    {
        $req = $this->guzzle->request('GET', $url);

        return $req;
    }
}
