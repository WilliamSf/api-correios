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
<<<<<<< HEAD
     * @param string $code
     * @return stdClass
=======
     * @param $code
     *
     * @return array
>>>>>>> d5ef55667468e094afff499c1686eb691bc88543
     */
    public function get(string $code): array
    {
        $req = $this->getRequest($this->url.$code);

        return $req;
    }
}
