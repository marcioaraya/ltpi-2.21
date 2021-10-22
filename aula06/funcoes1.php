<?php
// é possível definir um valor padrão para parâmetros
// não informados
// OBS: não é possível definir valor padrão para uma
// parâmetro passada por referência
function Contar($variavel=10){
    for($i=0;$i<=$variavel;$i++){
		echo $i . "<br>";
    }
}
Contar(7);
echo '<hr>';
Contar();
?>
