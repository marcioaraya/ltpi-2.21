<?php
// EOL = End Of Line // chr(13) = CR - Carriage Return// chr(10) = LF - Line Feed
define("EOL", chr(13).chr(10));
?>
<DOCTYPE html>
<html>
	<head>
		<title>Cadastrar aluno</title>
		<meta charset="UTF-8">
	</head>
	<body>
<?php
		if (!isset($_GET["bt_gravar"])) {
?>
		<h1>Cadastrar aluno</h1>
		<form action="incluir.php" method="GET">
			<label for="id_n">Nome</label>
			<input type="text" name="aluno" id="id_n">
			<br>
			<label for="id_c">Curso</label>
			<input type="text" name="curso" id="id_c">
			<br>
			<input type="Submit" value="Gravar" name="bt_gravar">
		</form>
<?php
		} else {

		$v_aluno = $_GET["aluno"];
		$v_curso = $_GET["curso"];
		
		echo "<p>Nome: $v_aluno</p>";
		echo "<p>Curso: $v_curso</p>";
		
		// $aluno = array('nome'=>"Marcio", "curso"=>"ADS");
		$aluno = array('nome'=>$v_aluno, "curso"=>$v_curso);

		$fp = fopen('data.txt', 'a');
		
		fwrite($fp, json_encode($aluno).EOL);

		fclose($fp);

		echo 'Dados gravados. <br>';
		
		echo '<a href="incluir.php">Incluir novo aluno</a>';
		}
?>		
	</body>
</html>








