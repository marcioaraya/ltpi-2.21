<?php 
  #exercício 126.b 

class Retangulo {
    private $ladoMaior=0.0;
    private $ladoMenor=0.0;

    public function setLadoMaior(float $ladoMaior) {
        $this->ladoMaior=$ladoMaior;
    }

    public function setLadoMenor(float $ladoMenor) {
        $this->ladoMenor=$ladoMenor;
    }

    public function calculaArea(){
        return $this->ladoMaior*$this->ladoMenor;
    }
}  
