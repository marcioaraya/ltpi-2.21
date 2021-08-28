<!DOCTYPE html>
<html>
	<head> 
		<h1>Exemplos</h1>
		<meta charset="UTF-8"> 
	</head>
	<body>
	<!--
	    // action: nome do programa que receberá os dados
		//         deste formulário
		// method: - GET:  tem limite de tamanho (aprox. 2000 bytes)
		//                 dados aparecem na URL
		//         - POST: não tem limite de tamanho
		//                 dados não aparecem na URL 
     -->		
		<form action="ola.php" method="GET">  
			Nome: <input type="text" 
			             name="nome">
			<br>  	
			Sobrenome: <input type="text" 
			                  name="sobrenome">
			<br>  
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
