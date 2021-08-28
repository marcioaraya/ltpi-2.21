<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    <meta charset='UTF-8'>
  </head>
  <body>
    <h1>Primeiro programa</h1>
	<?php
	// isset retorna verdadeiro se a variável tiver conteúdo
	  echo "isset -".isset($primeiroNomeDaPessoa).'-<br>';
	  echo "empty -".empty($primeiroNomeDaPessoa).'-<br>';
	  $primeiroNomeDaPessoa= "Marcio";
	  echo "isset -".isset($primeiroNomeDaPessoa).'-<br>';
	  echo "empty -".empty($primeiroNomeDaPessoa).'-<br>';
	  echo '<p>Olá! '.$primeiroNomeDaPessoa.'</p>';
	  echo "<p>Olá! $primeiroNomeDaPessoa</p>";
	  
	?>
  </body>
</html>
