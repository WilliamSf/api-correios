Essa lib é apenas um wrapper para algumas APIs disponíveis na internet, ao invés de ter que fazer as requisições na mão, é só usá-la. :)  

Atualmente uso as seguintes APIs: http://developers.agenciaideias.com.br/correios/rastreamento/ e http://correiosapi.apphb.com. Pretendo, no futuro, disponibilizar uma própria.  

## Instalação 

Para instalar, apenas rode `composer require mateusjatenee/api-correios` no terminal.


## Exemplos de uso  

```php
<?php

use correiosAPI\CEP;

$cep = new CEP();
$cep = $cep->get(01310000);

$cep->cep // 01310000
$cep->tipoDeLogradouro // Avenida
$cep->logradouro // Paulista
$cep->bairro // Bela Vista
$cep->cidade // São Paulo
$cep->estado // SP

```

