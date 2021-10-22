<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $operacao = $_GET["operacao"];

            switch ($operacao) {
                case "soma":
                    echo "O resultado da soma é ".($n1 + $n2)."<br>";
                    break;
                case "subtracao":
                    echo "O resultado da subtração é ".($n1 - $n2)."<br>";
                    break;
                case "multiplicacao":
                    echo "O resultado da multiplicação é ".($n1 * $n2)."<br>";
                    break;
                case "divisao":
                    if ($n2!=0) {
                        echo "O resultado da divisão é ".($n1 / $n2)."<br>";
                    } else {
                        echo "Erro - divisão por zero<br>";
                    }
                    break;
                default:
                    echo "Erro<br>";
                    break;
            }
            
            
        ?>
        <p><a href="calculadora.php">Voltar para página inicial</a></p>
    </body>
</html>








