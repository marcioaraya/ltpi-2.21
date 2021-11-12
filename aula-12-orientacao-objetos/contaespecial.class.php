<?php
// contaespecial.class.php
include_once "conta.class.php";
  
class ContaEspecial extends Conta {
	
protected $Limite;

  function __construct($s, $n, $l) {
	  parent::__construct($s, $n);
	  $this->Limite = $l;
  }
 
  function Sacar($v) {
    if (($this->ObterSaldo() + $this->Limite)>= $v) {
        $this->Depositar(-$v);
      } else {
      echo "Saldo insuficiente<br>";
    }
  }
} 
?>
	