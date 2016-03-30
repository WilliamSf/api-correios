<?php

class CEPTest extends PHPUnit_Framework_TestCase
{
    public function __construct()
    {
        $this->cep = new CEP();
    }
    public function test_request_returns_a_successful_array()
    {
        $req = $this->cep->get('http://correiosapi.apphb.com/cep/66085090');
        $this->assertEquals('66085090', $req->cep);
    }
}
