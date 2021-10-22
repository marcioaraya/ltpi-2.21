<?php
// EOL = End Of Line 
// chr(13) = CR - Carriage Return
// chr(10) = LF - Line Feed
define("EOL", chr(13).chr(10));

$aluno = array('nome'=>"Marcio", "curso"=>"ADS");

$fp = fopen('data.txt', 'w');
fwrite($fp, json_encode($aluno).EOL);

fclose($fp);

echo 'Dados gravados';

// o conteúdo de 'data.txt' agora é 123 e não 23!
?>