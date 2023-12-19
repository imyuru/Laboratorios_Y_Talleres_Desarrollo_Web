<?php
require_once('matriz.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];
    $objMatriz = new Matriz($n);
    $matriz = $objMatriz->obtenerMatriz();
    $sumaEsquinas = $objMatriz->sumarEsquinas();

    $_SESSION["matriz"] = $matriz;
    $_SESSION["sumaEsquinas"] = $sumaEsquinas;
    $_SESSION["n"] = $n;
}

header('Location: ejemplo5taller.php');
?>
