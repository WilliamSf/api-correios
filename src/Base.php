<?php

namespace correiosAPI;

use GuzzleHttp\Client;

class Base
{
    public function __construct()
    {
        $this->guzzle = new Client();
    }
    public function getRequest($url)
    {
        $req = $this->guzzle->request('GET', $url);

        $req = json_decode($req->getBody(), true);

        return (object) $req;
    }
}
