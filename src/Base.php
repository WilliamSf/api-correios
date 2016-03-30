<?php

namespace correiosAPI;

use GuzzleHttp\Client;

class Base
{
    public function __construct()
    {
        $this->guzzle = new Client();
    }
    /**
     * Retorna o resultado de uma requisição GET
     *
     * @param string $url
     * @return mixed
     */
    public function getRequest(string $url)
    {
        $req = $this->guzzle->request('GET', $url);

        $req = json_decode($req->getBody());

        return $req;
    }
}
