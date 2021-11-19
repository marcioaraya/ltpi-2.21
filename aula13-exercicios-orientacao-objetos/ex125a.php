<?php 
class Empresa {
    private $nome;

    # getters & setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = $n;
    }
}

## exemplo de uso da classe 

# cria um objeto da classe empresa
$empresa1 = new Empresa();

$empresa1->setNome("ACME");

echo "O nome da empresa é ".$empresa1->getNome()."<br>";

