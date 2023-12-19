<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Taller Ejemplo 3</title>
</head>
<body>
    <?php session_start();?>
    <div class="container" align="center">
        <h1>Calculadora de condiciones</h1>
        <form action="calcularVer.php" method="post">
            <div class="form-group col-md-5">
                <label>Primer Numero</label>
                <input type="text" name="primerNumero" class="form-control" placeholder="Ingrese un numero" value="<?php isset($_SESSION['primerNumero'])? print($_SESSION['primerNumero']):""   ?>" >
            </div>
            <div class="form-group col-md-5">
                <label>Segundo Numero</label>
                <input type="text" name="segundoNumero" class="form-control" placeholder="Ingrese un numero" value="<?php isset($_SESSION['segundoNumero'])? print($_SESSION['segundoNumero']):""   ?>" >
            </div>

            <div class="form-group col-md-5">
                <label>Respuesta:</label>
                <input type="text" name="respuesta" class="form-control" disabled value="<?php isset($_SESSION['condiciones'])? print($_SESSION['condiciones']):""   ?>" >
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Verificar</button>
        </form>
    <?php session_destroy() ?>
    </div>
</body>
</html>