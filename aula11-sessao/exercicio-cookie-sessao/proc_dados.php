<?php
session_start();

// proc_dados.php
if (isset($_GET["nome"])) {
	$v_usuario = $_GET["nome"];
	$v_time = time();
	// setcookie("c_usuario", $v_usuario, time()+(2 * 60 * 60));
	$_SESSION["c_usuario"] = $v_usuario;

	// setcookie("c_time_login", $v_time, time()+7200);
	$_SESSION["c_time_login"] = $v_time;


	echo "Ola $v_usuario";
	
	echo "<a href=proc_dados.php>Testar tempo após login</a>";

} else {

	echo '<hr>';
	print_r($_SESSION);
	echo '<hr>';
	$agora = time();

	// $ult_login = $_COOKIE["c_time_login"];
	$ult_login = $_SESSION["c_time_login"];
	  
	$passou = $agora - $ult_login;
	if ($passou > 10) {
		echo "<h1>Faça login novamente</h1>";
		echo "<p>Passaram $passou segundos</p>";
		echo "<a href=index.html>Login</a>";
	} else {
		echo "<p>Passaram $passou segundos</p>";
		echo "<p>Após 10 segundos será exibida mensagem solicitando novo login</p>";
		
		echo "<a href=proc_dados.php>Testar tempo após login</a>";
	}
}

?>