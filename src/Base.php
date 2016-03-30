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
     * Retorna os dados do CEP requisitado
     *
     * @param string $url
     * @return stdClass
     */
    public function getRequest(string $url)
    {
        $req = $this->guzzle->request('GET', $url);

        $req = json_decode($req->getBody());

        return $req;
    }
}
