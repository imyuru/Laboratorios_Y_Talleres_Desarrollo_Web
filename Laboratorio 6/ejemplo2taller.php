<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Taller Ejemplo 2</title>
</head>
<body>
    <?php session_start();?>
    <div class="container" align="center">
        <h1>Calculadora de Precio a Pagar</h1>
        <form action="calcularPago.php" method="post">
            <div class="form-group col-md-5">
                <label>Ingrese la cantidad de horas </label>
                <input type="text" name="horas" class="form-control" placeholder="Ingrese la cantidad de horas" value="<?php isset($_SESSION['horas'])? print($_SESSION['horas']):""   ?>" >
            </div>
            <div class="form-group col-md-5">
                <label>Ingrese el precio por hora </label>
                <input type="text" name="precio" class="form-control" placeholder="Ingrese el precio" value="<?php isset($_SESSION['precio'])? print($_SESSION['precio']):""   ?>" >
            </div>

            <div class="form-group col-md-5">
                <label>Cantidad a pagar:</label>
                <input type="text" name="CantidadPago" class="form-control" disabled value="<?php isset($_SESSION['cantidadPago'])? print($_SESSION['cantidadPago']):""   ?>" >
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Pagar</button>
        </form>
    <?php session_destroy() ?>
    </div>
</body>
</html>