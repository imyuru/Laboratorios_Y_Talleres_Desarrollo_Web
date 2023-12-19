<?php
class Verificar {
    private $primerNumero;
    private $segundoNumero;

    public function __construct($pNumero, $sNumero) {
        $this->primerNumero = $pNumero;
        $this->segundoNumero = $sNumero;
    }

    public function calcularVerificado() {
        $respuestaPrimerNumero = "Si";
        $respuestaSegundoNumero = "Si";
        $pNumero = $this->primerNumero;
        $sNumero = $this->segundoNumero;
        $primero = str_split($pNumero);
        $segundo = str_split($sNumero);
        foreach ($primero as $posicion) {
            if ($posicion % 2 !== 0) {
                $respuestaPrimerNumero = "No";
            } 
        }
        foreach ($segundo as $posicion2) {
            if ($posicion2 % 2 == 0) {
                $respuestaSegundoNumero = "No";
            } 
        }
        $respuesta = "Primer valor cumple: " . $respuestaPrimerNumero . " Segundo valor cumple: " . $respuestaSegundoNumero;
        return $respuesta;
    }
}