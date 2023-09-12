<?php

function exibeMensagem (string $mensagem) {
    echo $mensagem . PHP_EOL;
}

function efetuaSaque (array $conta, float $valorSaque): array {
    if ($conta["saldo"] - $valorSaque >= 0) {
        $conta["saldo"] -= $valorSaque;        
    } else {
        exibeMensagem("$conta[titular], voce não pode sacar");
    }
    return $conta;
}

function efetuaDeposito (array $conta, float $valorDeposito): array {
    if ($valorDeposito >= 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem("valor de depósito inválido para o titutular $conta[titular]");
    }
    return $conta;
}
