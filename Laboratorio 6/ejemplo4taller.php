<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Taller Ejemplo 4</title>
</head>
<body>
    <?php session_start();?>
    <div class="container" align="center">
        <h1>Calculadora del día de Pascua</h1>
        <form action="calcularPascua.php" method="post">
            <div class="form-group col-md-5">
                <label>Ingrese el año </label>
                <input type="text" name="year" class="form-control" placeholder="Ingrese un año" value="<?php echo isset($_SESSION['year']) ? $_SESSION['year'] : "" ?>" >
            </div>

            <div class="form-group col-md-5">
                <label>Día de Pascua:</label>
                <input type="text" name="diaPascua" class="form-control" disabled value="<?php echo isset($_SESSION['diaPascua']) ? $_SESSION['diaPascua'] : "" ?>" >
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Calcular día de Pascua</button>
        </form>
    <?php session_destroy() ?>
    </div>
</body>
</html>