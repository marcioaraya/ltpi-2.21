<?php
# exercício 129

class Sequencia {
    private $inicio=0;
    private $fim=0;

    public function setInicio($inicio){
        $this->inicio=$inicio;
    }

    public function setFim($fim){
        $this->fim=$fim;
    }

    public function exibirTodosNumeros(){
        for($i=$this->inicio; $i<=$this->fim; $i++){
            if ($i%2==0){
                $cor="blue";
            } else {
                $cor="red";
            }
            echo '<p style="color:'.$cor.'">'.$i.'</p>';
        }
    }

    public function exibirPares(){
        for($i=$this->inicio; $i<=$this->fim; $i++){
            if ($i%2==0){
                $cor="blue";
                echo '<p style="color:'.$cor.'">'.$i.'</p>';
            }
        }
    }

    public function exibirImpares(){
        for($i=$this->inicio; $i<=$this->fim; $i++){
            if ($i%2!=0){
                $cor="red";
                echo '<p style="color:'.$cor.'">'.$i.'</p>';
            }
        }
    }
}