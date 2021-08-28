<!DOCTYPE html>
<html>
  <head>
    <title> Funções isset() e empty()</title>
	<meta charset='utf-8'>
	</head>
	<body>

	<?php
	echo "ANTES de declarar a variável<br>";
	echo "isset:".isset($var_boolean).'<br>';
	echo "empty:".empty($var_boolean).'<br>';

	echo "APÓS atribuir o valor FALSO para a variável<br>";
	$var_boolean = (1==2);
	echo "(1==2):".$var_boolean.'<br>';
	echo "isset:".isset($var_boolean).'<br>';
	echo "empty:".empty($var_boolean).'<br>';

	echo "APÓS atribuir o valor VERDADEIRO para a variável<br>";
	$var_boolean = (1==1);
	echo "(1==1):".$var_boolean.'<br>';
	echo "isset:".isset($var_boolean).'<br>';
	echo "empty:".empty($var_boolean).'<br>';

	?>
	</body>
</html>
