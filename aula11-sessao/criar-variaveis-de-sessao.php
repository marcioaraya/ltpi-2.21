<?php
// exemplo do site W3Schools: https://www.w3schools.com/php/php_sessions.asp
// Start the session
// ATENÇÃO: session_start deve ser a PRIMEIRÍSSIMA coisa a fazer
// quando trabalha com variáveis de sessão
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html> 