<?php
    require_once('multiplos.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $menor=$_POST['menor'];
        $mayor=$_POST['mayor'];
        $objMultiplos = new Multiplo($menor,$mayor);
        $cantidadMultiplos =$objMultiplos->calcularMultiplos();
        $_SESSION["cantidadMultiplos"]= $cantidadMultiplos;
        $_SESSION["menor"]=$menor;
        $_SESSION["mayor"]=$mayor;
    }
    header('Location:ejemplo1taller.php');

?>