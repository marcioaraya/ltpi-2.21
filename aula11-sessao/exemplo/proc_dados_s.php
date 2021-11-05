<?php
session_start();
?>
<!DOCTYPE html> <?php
// proc_dados.php
$v_usuario = $_GET["nome1"];
$v_idade = $_GET["idade1"];

echo '<hr>';
print_r($_SESSION);
echo '<hr>';

//setcookie("c_usuario", $v_usuario,time()+7200);
//setcookie("c_idade", $v_idade,time()+7200);
$_SESSION["c_usuario"]=$v_usuario;
$_SESSION["c_idade"]=$v_idade;

echo '<html><body>';
echo 'Ola! '.$v_usuario; // "Ola! $v_usuario";
echo '<br>';
echo 'Sua idade:'.$v_idade;
echo '<br><br>';
echo '<a href="le_sessao.php"> Ler dados gravados nas variaveis de sessao</a>';
//$_SESSION["c_idade"]=15;
echo '</body></html>';
?>




