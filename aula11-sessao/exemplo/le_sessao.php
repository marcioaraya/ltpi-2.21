<?php
session_start();
// le_sessao.php
if (isset($_SESSION["c_usuario"])) {
    $usuario = $_SESSION["c_usuario"];
}
if (isset($_SESSION["c_idade"])){
    $idade = $_SESSION["c_idade"];
}
echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de Sessao</title>
		 <meta charset=\'utf-8\'>
	  </head>	 
      <body>';
echo '<h1> Lendo dados gravado na sessao </h1>';
if (isset($usuario)) {
    echo 'Olá! '.$usuario;
    echo '<br>';
    echo 'Sua idade:'.$idade;
    echo '<p><a href="limpa_sessao.php">Apagar variáveis de sessão</a></p>';
} else {
    echo "<p>Não foram localizadas variáveis de sessão</p>";
    echo '<p><a href="index.html">Ir para formulário.</a></p>';
}
echo '</body></html>';

?>
