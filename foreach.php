<?php

$conta1 = ["titular" => "joao", 'saldo' => "2890.00"];
$conta2 = ["titular" => "alberto", 'saldo' => "6090.00"];
$conta3 = ["titular" => "pedro", 'saldo' => "3290.00"];
$conta4 = ["titular" => "juca", 'saldo' => "1490.00"];

$contasCorrentes = [
    123456732 => $conta1,
    234533557 => $conta2,
    776434234 => $conta3,
    567673494 => $conta4
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "cpf: $cpf. nome: $conta[titular]. saldo:  $conta[saldo]" . PHP_EOL;
}