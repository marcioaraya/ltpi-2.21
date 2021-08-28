<?php
function contador()
{
    static $cont;
	if (empty($cont)) {
		$cont = 1;
	} else {
		$cont++;
	};
    echo "Esta é a chamada: $cont <br>";
}
contador();
contador();
contador();
?>
