<?php

$conta1 = ["titular" => "joao", 'saldo' => "2890.00"];
$conta2 = ["titular" => "alberto", 'saldo' => "6090.00"];
$conta3 = ["titular" => "pedro", 'saldo' => "3290.00"];
$conta4 = ["titular" => "juca", 'saldo' => "1490.00"];


$contasCorrentes = [$conta1, $conta2, $conta3, $conta4];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]["titular"] . " " . $contasCorrentes[$i]["saldo"] . PHP_EOL;
}