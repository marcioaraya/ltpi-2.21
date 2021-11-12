<?php
// salvar como conta.class.php 
class Conta {
//atributos
protected $Saldo;
protected $Numero;

// métodos
  public function __construct($s, $n) {
	  $this->Saldo = $s;
	  $this->Numero = $n;
  }
  
  public function Depositar($v){
    $this->Saldo += $v; // $this->Saldo = $this->Saldo + $v;
  }
 
  public function Sacar($v) {
    if ($this->Saldo >= $v) {
      $this->Saldo -= $v; // $this->saldo = $this->saldo - $v;
	  echo ' o saque foi de '.$v.'<br>';
    } else {
		echo 'saldo insuficiente <br>';
	}
  }
  
  public function ObterSaldo() {
    return $this->Saldo;
  } 
} 
// salvar como conta.class.php em C:\XAMPP\HTDOCS\OBJ
?>




	