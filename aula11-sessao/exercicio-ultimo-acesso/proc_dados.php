<?php
// proc_dados.php
if (isset($_GET["nome"])) {
	$v_usuario = $_GET["nome"];
	$v_time = time();
	setcookie("c_usuario", $v_usuario,time()+(2 * 60 * 60));
	setcookie("c_time_login", $v_time, time()+7200);
	setcookie("c_time_ultimo_acesso", $v_time, time()+7200);

	echo "<p>Olá $v_usuario</p>";
	
	echo "<a href=proc_dados.php>Testar tempo após login</a>";

} else {
	$agora = time();
	$ult_acesso = $_COOKIE["c_time_ultimo_acesso"];
	$hora_login = $_COOKIE["c_time_login"];
	$passou = $agora - $ult_acesso;
	if ($passou > 10) {
		echo "<h1>Faça login novamente</h1>";
		echo "<p>Passaram $passou segundos desde o último acesso</p>";
		echo "<p>Login: ".date("d/m/Y H:i:s", $hora_login)."</p>";
		echo "<p>Último acesso: ".date("d/m/Y H:i:s", $ult_acesso)."</p>";
		echo "<p>Agora: ".date("d/m/Y H:i:s", $agora)."</p>";
		echo "<a href=index.html>Login</a>";
	} else {
		// atualiza o valor salvo para armazenar a hora do último acesso
		echo "<p>Login: ".date("d/m/Y H:i:s", $hora_login)."</p>";
		echo "<p>Último acesso: ".date("d/m/Y H:i:s", $ult_acesso)."</p>";
		echo "<p>Agora: ".date("d/m/Y H:i:s", $agora)."</p>";

		setcookie("c_time_ultimo_acesso", $agora, time()+7200);
		echo "<p>Passaram $passou segundos</p>";
		echo "<p>Após 10 segundos será exibida mensagem solicitando novo login</p>";
		
		echo "<a href=proc_dados.php>Testar tempo após último acesso</a>";
	}
}

?>
