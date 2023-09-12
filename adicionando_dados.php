<?php

$conta1 = ["titular" => "joao", 'saldo' => "2890.00"];
$conta2 = ["titular" => "alberto", 'saldo' => "6090.00"];

$contasCorrentes = [
    123456732 => $conta1
];

$contasCorrentes[567673494] = $conta2;

foreach ($contasCorrentes as $cpf => $conta) {
    echo "cpf: $cpf. nome: $conta[titular]. saldo:  $conta[saldo]" . PHP_EOL;
}