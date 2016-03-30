<?php

namespace correiosAPI;

use correiosAPI\Base;

class Order extends Base
{
    private $url = 'http://developers.agenciaideias.com.br/correios/rastreamento/json/';

    public function get($code): array
    {
        $req = $this->getRequest($this->url . $code);
        return $req;
    }
}
