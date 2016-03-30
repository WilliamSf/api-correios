<?php

namespace correiosAPI;

use GuzzleHttp\Client;

class Base
{
    public function __construct()
    {
        $this->guzzle = new Client();
    }
    public function get($url)
    {
        $req = $this->guzzle->request('GET', $url);

        return $req;
    }
}
