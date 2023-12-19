<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Generar Matriz</title>
</head>
<body>
    <?php session_start(); ?>
    <div class="container" align="center">
        <h1>Generado de Matriz</h1>
        <form action="generarMatriz.php" method="post">
            <div class="form-group col-md-5">
                <label>Ingrese el valor de N:</label>
                <input type="text" name="n" class="form-control" placeholder="Ingrese N" value="<?php isset($_SESSION['n'])? print($_SESSION['n']):""   ?>" >
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Generar Matriz</button>
        </form>
    </div>
    <div>
        <?php if (isset($_SESSION['matriz'])): ?>
            <div class="container" align="center">
                <h2>Matriz Generada:</h2>
                <table class='table table-striped'>
                    <?php for ($i = 0; $i < $_SESSION['n']; $i++): ?>
                        <tr>
                            <?php for ($j = 0; $j < $_SESSION['n']; $j++): ?>
                                <td><?= $_SESSION['matriz'][$i][$j] ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </table>

                <h2>Suma de las Esquinas:</h2>
                <p><?= $_SESSION['sumaEsquinas'] ?></p>
            </div>
        <?php endif; ?>
    </div>
    <?php session_destroy(); ?>
</body>
</html>
