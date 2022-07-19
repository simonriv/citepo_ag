<?php
// Include library for functions
require_once("app/library/functions.php");

$functions = new Functions();

// Conditions for verification the getter
if(!isset($_GET["id"]) && $_GET["id"] !== ""){
    header("Location: https://www.citepo.com.co");
}

$id = $_GET["id"];

$verificate = $functions->verification($id);

$data = explode(",",$verificate);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFICACIÓN CITEPO</title>
</head>
<body>
    <main>
        <h1>NOMBRE:</h1>
            <p><?php echo $data[0]; ?></p>
        <h1>APELLIDOS:</h1>
            <p><?php echo $data[1]; ?></p>
        <h1>NÚMERO DE DOCUMENTO:</h1>
            <p><?php echo $data[2]; ?></p>
        <h1>TELÉFONO:</h1>
            <p><?php echo $data[3]; ?></p>
    </main>
</body>
</html>