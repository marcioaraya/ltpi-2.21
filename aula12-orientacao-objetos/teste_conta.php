<?php
// salvar como teste_conta.php
include_once "conta.class.php";

$conta1 = new Conta(0, 123);

//var_dump($conta1);

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Depositar(500);

# $conta1->Saldo = -2000;

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Sacar(500);
echo "O saldo eh:".$conta1->ObterSaldo()."<br>";

# ATIVIDADES:
# 1. depois de executar a primeira vez e observar os resultados, 
#    descomente a linha 12 (retire o # no início da linha), salve o arquivo 
#    e execute novamente. Observe que ocorrerá erro por tentar acessar um atributo protegido (protected)
# 2. no arquivo conta.class.php, na linha 5, substitua "protected" por "public" para o atributo $Saldo
#    salve o arquivo "conta.class.php" e execute novamente o "teste_conta.php" 
# 3. desfaça as alterações feitas nos itens 1 e 2:
#    - comente a linha 12 neste arquivo
#    - no arquivo conta.class.php, na linha 5, substitua "public" por "protected" para o atributo $Saldo   
#    salve as modificações 
#   
?>