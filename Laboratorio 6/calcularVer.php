<?php
    require_once('verificar.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $primerNumero=$_POST['primerNumero'];
        $segundoNumero=$_POST['segundoNumero'];
        $objVer = new Verificar($primerNumero,$segundoNumero);
        $condiciones =$objVer->calcularVerificado();
        $_SESSION["condiciones"]= $condiciones;
        $_SESSION["primerNumero"]=$primerNumero;
        $_SESSION["segundoNumero"]=$segundoNumero;
    }
    header('Location:ejemplo3taller.php');

?>