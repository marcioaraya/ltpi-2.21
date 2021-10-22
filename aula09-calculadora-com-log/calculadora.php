<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="calcula.php" method="GET">
            <label for="idnome">Nome:</label>
            <input type="text" name="nome" id="idnome">
            <br>
            <label for="id1">Número 1:</label>
            <input type="text" name="n1" id="id1">
            <br>
            <label for="id2">Número 2:</label>
            <input type="text" name="n2" id="id2">
            <br>
            <input type="radio" name="operacao" value="soma" id="id_soma" checked>
            <label for="id_soma">Soma</label>
            <br>
            <input type="radio" name="operacao" value="subtracao" id="id_sub">
            <label for="id_sub">Subtração</label>
            <br>
            <input type="radio" name="operacao" value="divisao" id="id_div">
            <label for="id_div">Divisão</label>
            <br>
            <input type="radio" name="operacao" value="multiplicacao" id="id_mult">
            <label for="id_mult">Multiplicação</label>
            <br>
            <input type="submit" value="Calcular" name="bt">
            
        </form>

        <p><a href="le_log.php">Consultar log</a></p>
    </body>
</html>
