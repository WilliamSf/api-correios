<?php

use correiosAPI\CEP;

class CEPTest extends PHPUnit_Framework_TestCase
{

    public function test_request_returns_a_valid_object()
    {
        $cep = new Cep();
        $req = $cep->get(66085090);
        $this->assertEquals($req->cep, 66085090);
        $this->assertEquals($req->tipoDeLogradouro, 'Conjunto');
        $this->assertEquals($req->logradouro, 'Crispim de Almeida');
        $this->assertEquals($req->bairro, 'Pedreira');
        $this->assertEquals($req->cidade, 'Belém');

    }
}
