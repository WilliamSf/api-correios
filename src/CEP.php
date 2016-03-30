<?php

namespace correiosAPI;

use correiosAPI\Base;

class CEP extends Base
{
    private $url = 'http://correiosapi.apphb.com/cep/';

    public function get(int $cep): array
    {
        $req = $this->getRequest($this->url . $cep);
        return $req;
    }
}
