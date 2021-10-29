<?php

setcookie("c_usuario","", time() -100);
setcookie("c_idade","",time()-100);

echo '<html><body>';
echo '<p>Os cookies foram apagados.</p>';
echo '<a href="le_cookie.php">Ler dados gravados nos cookies</a>';

echo '</body></html>';

?>
