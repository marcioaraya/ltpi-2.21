<?php 
class Adulto {
    # atributo 
    private $peso=0.0;

    # métodos
    public function engordar($quilos){
        $this->peso = $this->peso + $quilos;
    }

    public function emagrecer($quilos){
        $this->peso =  $this->peso - $quilos;
    }
}