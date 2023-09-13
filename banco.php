<?php
// include "funcoes.php";
// require "funcoes.php";
require_once "funcoes.php";

$conta1 = ["titular" => "joao", "saldo" => "2890.00"];
$conta2 = ["titular" => "alberto", "saldo" => "6090.00"];
$conta3 = ["titular" => "pedro", "saldo" => "3290.00"];
$conta4 = ["titular" => "juca", "saldo" => "1490.00"];
$conta5 = ["titular" => "jake peralta", "saldo" => "350.00"];


$contasCorrentes = [
    123456732 => $conta1,
    234533557 => $conta2,
    376434234 => $conta3,
    467673494 => $conta4,
    567864356 => $conta5
];

$contasCorrentes[123456732] = efetuaSaque($contasCorrentes[123456732], 4560.00);
$contasCorrentes[234533557] = efetuaSaque($contasCorrentes[234533557], 290.00);
$contasCorrentes[376434234] = efetuaSaque($contasCorrentes[376434234], 2290.00);

$contasCorrentes[123456732] = efetuaDeposito($contasCorrentes[123456732], -400);
$contasCorrentes[467673494] = efetuaDeposito($contasCorrentes[467673494], 400);

unset($contasCorrentes[567864356]);

foreach ($contasCorrentes as $cpf => $conta) {
    ["titular" => $titular, "saldo" => $saldo] = $conta;
    exibeMensagem(mensagem: "cpf: $cpf. nome: $titular. saldo:  $saldo");
}