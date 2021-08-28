<?php 
  $a = 2; 
  $b = 20; 
  $c = 5; 
  if ($a > $b) { 
    $a = $a + 10; 
    $b = $b + 5;  
    $c = $c +15;  
  } elseif ($a > $c) { 
    $a = $b + 20; 
    $b = $c + 5;  
    $c = $a + 15; 
  } else { 
    $a = $c + 10; // $a = 15
    $b = $a + 5;  // $b = 20
    $c = $b + 5;  // $c = 25
  } 
echo 'valor de $a: '.$a. '<br>';  
echo 'valor de $b: '.$b. '<br>';  
echo 'valor de $c: '.$c. '<br>'; 
 
?> 