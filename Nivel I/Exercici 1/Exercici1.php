<?php
session_start(); /*función para utilizar variables de sesión*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
 /* Session variables are set with the PHP global variable: $_SESSION.*/ 
if (isset($_SESSION["nombre"]) && isset($_SESSION["username"])){
    echo "El nombre es: " .htmlspecialchars ($_SESSION["nombre"]) . "\n";
    echo "El username es: " .htmlspecialchars ($_SESSION["username"]);
}else{
    echo "No hay variables de sesión creadas";
}

?>

</body>
</html>

