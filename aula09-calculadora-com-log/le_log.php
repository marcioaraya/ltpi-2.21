<?php // index.php ?>
<DOCTYPE html>
<html>
	<head>
		<title>Cadastro de aluno</title>
		<meta charset="UTF-8">
	</head>
	<body>
        <table border="1">
        <tr>
           <td>Nome</td>
           <td>Data/Hora</td>
           <td>N1</td>
           <td>N2</td>
           <td>Operação</td>
           <td>Resultado</td>
        </tr>
<?php
		$fp = fopen('calculadora.log', 'r');
		while ($operacao = json_decode(fgets($fp), true)){
			echo "<tr>".
            "<td>".$operacao["nome"]."</td>".
            "<td>".$operacao["data_hora"]."</td>".
            "<td>".$operacao["n1"]."</td>".
            "<td>".$operacao["n2"]."</td>".
            "<td>".$operacao["operacao"]."</td>".
            "<td>".$operacao["resultado"]."</td>".
            "</tr>";
		}
		fclose($fp);
?>		
        </table>
        <p><a href="calculadora.php">Novo cálculo</a></p>
	</body>
</html>
