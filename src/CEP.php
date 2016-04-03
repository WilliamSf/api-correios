<?php

namespace correiosAPI;

class CEP extends Base
{
    /**
     * @var string
     */
    private $url = 'http://correiosapi.apphb.com/cep/';

    /**
     * Retorna informações do CEP.
     *
     * @param int $cep
     *
     * @return stdClass
     */
    public function get(int $cep): \stdClass
    {
        $req = $this->getRequest($this->url.$cep);

        return $req;
    }
}
