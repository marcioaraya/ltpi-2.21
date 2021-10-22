<?php // index.php ?>
<DOCTYPE html>
<html>
	<head>
		<title>Cadastro de aluno</title>
		<meta charset="UTF-8">
	</head>
	<body>
<?php
		$fp = fopen('data.txt', 'r');

		while ($aluno = json_decode(fgets($fp), true)){
			echo "<p>".$aluno["nome"] . " - " . $aluno["curso"]."</p>";
		}

		fclose($fp);
		
?>		
	</body>
</html>
