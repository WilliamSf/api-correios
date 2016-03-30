<?php

namespace correiosAPI;

use correiosAPI\Base;

class CEP extends Base
{
    private $url = 'http://correiosapi.apphb.com/cep/';

    public function get(int $cep): \stdClass
    {
        $req = $this->getRequest($this->url . $cep);
        return $req;
    }
}
