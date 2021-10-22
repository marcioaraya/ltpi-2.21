<?php
// EOL = End Of Line // chr(13) = CR - Carriage Return// chr(10) = LF - Line Feed
define("EOL", chr(13).chr(10));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $nome = $_GET["nome"];
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $operacao = $_GET["operacao"];
            $data_hora = date("d/m/Y H:i:s");

            echo "<p>Olá! $nome.</p>";
            echo "<p>$data_hora</p>";
            switch ($operacao) {
                case "soma":
                    $resultado = $n1 + $n2;
                    echo "O resultado da soma é $resultado<br>";
                    break;
                case "subtracao":
                    $resultado = $n1 - $n2;
                    echo "O resultado da subtração é $resultado<br>";
                    break;
                case "multiplicacao":
                    $resultado = $n1 * $n2;
                    echo "O resultado da multiplicação é $resultado<br>";
                    break;
                case "divisao":
                    if ($n2!=0) {
                        $resultado = $n1 / $n2;
                        echo "O resultado da divisão é $resultado<br>";
                    } else {
                        echo "Erro - divisão por zero<br>";
                    }
                    break;
                default:
                    echo "Erro<br>";
                    break;
            }
            # gravação do log 
            $nome = $_GET["nome"];
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $operacao = $_GET["operacao"];
            $data_hora = date("d/m/Y H:i:s");

            $operacao = array('nome'=>$nome, 
                              'data_hora'=>$data_hora, 
                              'n1'=>$n1, 
                              'n2'=>$n2, 
                              'operacao'=>$operacao, 
                              'resultado'=>$resultado );

            $fp = fopen('calculadora.log', 'a');
            
            fwrite($fp, json_encode($operacao).EOL);
    
            fclose($fp);
            
        ?>
        <p><a href="calculadora.php">Voltar para página inicial</a></p>
        <p><a href="le_log.php">Consultar log</a></p>
    </body>
</html>








