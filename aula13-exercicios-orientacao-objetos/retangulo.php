<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retangulo.php</title>
</head>
<body>
    <h1>Retângulo</h1>
    <?php 
      include "retangulo.class.php";

      if (isset($_GET["altura"])&&isset($_GET["largura"])){
# calcular a área
        $retangulo = new Retangulo();
        $retangulo->setLadoMenor($_GET["altura"]);
        $retangulo->setLadoMaior($_GET["largura"]);
        echo "A área é ".$retangulo->calculaArea()."<br>";
        echo "<p><a href=\"retangulo.php\">Novo cálculo</a></p>";
      } else {
    ?>
        <form method="get" action="retangulo.php">
            <label for="id-larg">Informe a largura:</label>
            <input type="text" name="largura" id="id-larg">
            <br>
            <label for="id-alt">Informe a altura:</label>
            <input type="text" name="altura" id="id-alt">
            <br>
            <input type="submit" name="bt-sub" value="Calcula Área">
        </form>
        
    <?php
      }
    ?>
</body>
</html>