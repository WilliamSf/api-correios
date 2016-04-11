<?php

namespace correiosAPI;

use correiosAPI\Base;

class Order extends Base
{
    /**
     * @var string
     */
    private $url = 'http://developers.agenciaideias.com.br/correios/rastreamento/json/';

    /**
     * Retorna array de objetos com informações da encomenda
     *
     * @param string $code
     * @return stdClass
     */
    public function get(string $code): array
    {
        $req = $this->getRequest($this->url . $code);
        return $req;
    }
}
