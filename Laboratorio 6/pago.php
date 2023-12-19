<?php
class Pago {
    private $horas;
    private $precio;

    public function __construct($choras, $cprecio) {
        $this->horas = $choras;
        $this->precio = $cprecio;
    }

    public function calcularPago() {
        $choras = $this->horas;
        $cprecio = $this->precio;

        if (intval($choras) >= 0) {
            $cantidadPago = 0.0; 
            if (intval($choras) <= 40){
                $cantidadPago = $choras * $cprecio; 
            } elseif (intval($choras) > 40 && intval($choras) < 50){
                $restoHoras = $choras - 40;
                $nuevprecio = (($cprecio * 0.5) + $cprecio);
                $cantidadPago = (($cprecio * 40) + ($restoHoras * ($nuevprecio)));
            } elseif (intval($choras) >= 50){
                $extraNormales = $choras - 40;
                $extraMayores = $extraNormales - 10;
                $nuevPrecioNormales = (($cprecio * 0.5) + $cprecio);
                $nuevoPrecioMayores = ($cprecio * 2);
                $cantidadPago = (($cprecio * 40) + ($extraNormales * ($nuevPrecioNormales)) + ($extraMayores * ($nuevoPrecioMayores)));
            }

            return $cantidadPago;
        } else {
            return "No puedes tener horas negativas";
        }
    }
}
?>
