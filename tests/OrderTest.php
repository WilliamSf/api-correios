<?php

use correiosAPI\Order;

class OrderTest extends PHPUnit_Framework_TestCase
{
    public function test_request_returns_a_valid_object()
    {
        $order = new Order();
        $req = $order->get('PJ405134892BR');
        $this->assertEquals($req[0]->detalhes, "Objeto sujeito a encaminhamento no próximo dia útil ");
        $this->assertEquals($req[0]->acao, 'postado depois do horário limite da agência');
    }
}
