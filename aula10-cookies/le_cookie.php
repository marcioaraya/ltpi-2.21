<?php
var_dump($_COOKIE);
if (isset($_COOKIE["c_usuario"])) {
    $usuario = $_COOKIE["c_usuario"];
} 
if (isset($_COOKIE["c_idade"])) {
    $idade = $_COOKIE["c_idade"];
}
if (isset($_COOKIE["meucookie"])) {
    echo $_COOKIE["meucookie"];
}


echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de Cookies</title>
		 <meta charset=\'utf-8\'>
      <body>';
echo '<h1> Lendo dados gravado nos cookies </h1>';
if (isset($usuario)) {
    echo 'Olá! '.$usuario;
    echo '<br>';
    echo 'Sua idade:'.$idade;
    echo '<p><a href="limpa_cookie.php">Apagar cookies</a></p>';
} else {
    echo "<p>Não foram localizados cookies</p>";
    echo '<p><a href="index.html">Ir para formulário.</a></p>';
}

echo '</body></html>';

?>
