<?php
    require_once('pascua.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $year=$_POST['year'];
        $objPascua = new Pascua($year);
        $diaPascua =$objPascua->calcularFechaPascua();
        $_SESSION["diaPascua"]= $diaPascua;
    }
    header('Location:ejemplo4taller.php');

?>