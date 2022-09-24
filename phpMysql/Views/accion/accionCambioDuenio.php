<?php

include_once '../../config.php';

$datos = data_submitted();
$resp = false;

$objCtrlPersona = new PersonaControl();
$objCtrlAuto = new AutoControl();

if ($objCtrlAuto->cambiarDuenio($datos)) {
    $resp = true;
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Public/cssPuro/style.css">
    <title>Document</title>
</head>

<body>
    <?php require_once '../templates/header.php' ?>

    <?php
    if($resp) {
        echo "Duenio cambiado";
    }else{
        echo "No se pudo realizar el cambio";
    }
    ?>

    <?php require_once '../templates/footer.php' ?>
</body>

</html>