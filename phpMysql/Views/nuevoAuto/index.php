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
    <?php include_once '../templates/header.php' ?>
    <div id="contenedorForm">   
        <form action="../accion/accionNuevoAuto.php" method="post">
            <label for="inputPatente">Patente</label>
            <input type="text" name="inputPatente" id="inputPatente"><br>
            <label for="inputMarca">Marca</label>
            <input type="text" name="inputMarca" id="inputMarca"><br>
            <label for="inputModelo">Modelo</label>
            <input type="number" name="inputModelo" id="inputModelo"><br>
            <label for="inputDniDuenio">DNI Dueño</label>
            <input type="text" name="inputDniDuenio" id="inputDniDuenio"><br>
            <input class="btn" style="background-color: #EB5E0B; color:white;" type="submit" value="Agregar">
        </form>
    </div>

    <?php require_once '../templates/footer.php' ?>
</body>
</html>