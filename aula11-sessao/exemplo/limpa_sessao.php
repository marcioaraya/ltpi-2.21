<?php
session_start();
unset($_SESSION["c_usuario"]);
unset($_SESSION["c_idade"]);

echo '<html><body>';
echo '<p>As variáveis de sessão foram apagadas.</p>';
echo '<a href="le_sessao.php">Ler dados gravados nas variáveis de sessão</a>';

echo '</body></html>';

?>
