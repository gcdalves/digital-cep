<?php

require_once "../vendor/autoload.php";

use gabri\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('90520320');

print_r($resultado);