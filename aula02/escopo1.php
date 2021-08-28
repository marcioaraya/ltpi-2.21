<?php
	function testa_escopo1()
	{ 
	$num += 5; // $num = $num + 5;
	echo $num . "<br>";
	}

    $num = 5000;
 	echo $num . "<br>";
	testa_escopo1();
?>
