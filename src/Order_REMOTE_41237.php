<?php

namespace correiosAPI;

class Order extends Base
{
    /**
     * @var string
     */
    private $url = 'http://developers.agenciaideias.com.br/correios/rastreamento/json/';

    /**
     * Retorna array de objetos com informações da encomenda.
     *
     * @param $code
     *
     * @return array
     */
    public function get($code): array
    {
        $req = $this->getRequest($this->url.$code);

        return $req;
    }
}
