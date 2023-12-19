<?php
    require_once('pago.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $horas=$_POST['horas'];
        $precio=$_POST['precio'];
        $objPago = new Pago($horas,$precio);
        $cantidadPago =$objPago->calcularPago();
        $_SESSION["cantidadPago"]= $cantidadPago;
        $_SESSION["horas"]=$horas;
        $_SESSION["precio"]=$precio;
    }
    header('Location:ejemplo2taller.php');

?>