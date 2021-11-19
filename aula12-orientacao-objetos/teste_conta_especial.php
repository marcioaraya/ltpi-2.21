<?php
// salvar como teste_conta_especial.php 
include_once "contaespecial.class.php";

$conta2 = new ContaEspecial(0, 456, 1000);
echo '<hr>';
//var_dump($conta2);
echo '<hr>';
echo 'vou depositar';
$conta2->Depositar(500);
echo '<hr>';
//var_dump($conta2);
echo '<hr>';
echo "O saldo eh:".$conta2->ObterSaldo()."<br>";
echo '<hr>';
echo 'vou sacar';

$conta2->Sacar(550);
echo '<hr>';
echo "O saldo eh:".$conta2->ObterSaldo()."<br>";
echo '<hr>';
var_dump($conta2);
?>