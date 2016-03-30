<?php

use correiosAPI\CEP;

class CEPTest extends PHPUnit_Framework_TestCase
{

    public function test_request_returns_a_successful_array()
    {
        $cep = new Cep();
        $req = $cep->get(66085090);
        $this->assertEquals(66085090, $req->cep);
    }
}
