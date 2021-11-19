<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sequencia.php</title>
</head>
<body>
    <h1>Sequência</h1>
    <?php 
      include "sequencia.class.php";

      if (isset($_GET["inicio"])&&isset($_GET["fim"])){
# exibir sequencia
        $seq = new Sequencia();
        $seq->setInicio($_GET["inicio"]);
        $seq->setFim($_GET["fim"]);

        if($_GET["opcao"]=="T") {
            $seq->exibirTodosNumeros();
        } elseif ($_GET["opcao"]=="P"){
            $seq->exibirPares();
        } elseif ($_GET["opcao"]=="I"){
            $seq->exibirImpares();
        } else {
            echo "<p>Opção inválida</p>";
        }


        echo "<p><a href=\"sequencia.php\">Nova sequência</a></p>";
      } else {
    ?>
        <form method="get" action="sequencia.php">
            <label for="id-inicio">Selecione o valor inicial:</label>
            <select name="inicio" id="id-inicio">
                <?php
                    for($i=1;$i<=50;$i++){
                        echo "<option value=\"$i\">$i</option>";
                    }
                ?>
            </select>
            <br>
            <label for="id-fim">Selecione o valor final:</label>
            <select name="fim" id="id-fim">
                <?php
                    for($i=100;$i>=51;$i--){
                        echo "<option value=\"$i\">$i</option>";
                    }
                ?>
            </select>
            <br>
            <label for="id-opcao">Mostrar:</label>
            <br>
            <input type="radio" name="opcao" id="id-todos" value="T" checked> 
            <label for="id-todos">Todos</label>
            <br>
            <input type="radio" name="opcao" id="id-pares" value="P"> 
            <label for="id-pares">Apenas os pares</label>
            <br>
            <input type="radio" name="opcao" id="id-impares" value="I"> 
            <label for="id-impares">Apenas os ímpares</label>
            <br>

            <input type="submit" name="bt-sub" value="Mostra a sequência">
        </form>
        
    <?php
      }
    ?>
</body>
</html>