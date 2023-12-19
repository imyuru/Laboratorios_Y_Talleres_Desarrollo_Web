<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Taller Ejemplo 1</title>
</head>
<body>
    <?php session_start();?>
    <div class="container" align="center">
        <h1>Calculadora de Multiplos de 3</h1>
        <form action="calcularMultiplos.php" method="post">
            <div class="form-group col-md-5">
                <label>Ingrese el rango inferior </label>
                <input type="text" name="menor" class="form-control" placeholder="Ingrese un número" value="<?php isset($_SESSION['menor'])? print($_SESSION['menor']):""   ?>" >
            </div>
            <div class="form-group col-md-5">
                <label>Ingrese el rango superior </label>
                <input type="text" name="mayor" class="form-control" placeholder="Ingrese un número" value="<?php isset($_SESSION['mayor'])? print($_SESSION['mayor']):""   ?>" >
            </div>

            <div class="form-group col-md-5">
                <label>Cantidad de Multiplos:</label>
                <input type="text" name="respuesta" class="form-control" disabled value="<?php isset($_SESSION['cantidadMultiplos'])? print($_SESSION['cantidadMultiplos']):""   ?>" >
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Cantidad</button>
        </form>
    <?php session_destroy() ?>
    </div>
</body>
</html>