<?php
class Multiplo {
    private $menor;
    private $mayor;

    public function __construct($rmen, $rmay) {
        $this->menor = $rmen;
        $this->mayor = $rmay;
    }

    public function calcularMultiplos() {
        $rmen = $this->menor;
        $rmay = $this->mayor;

        if ($rmen <= $rmay) {
            $respuesta = 0;
            for ($i = $rmen; $i <= $rmay; $i++) {
                if (intval($i) % 3 == 0) {
                    $respuesta++;
                }
            }
            return $respuesta;
        } else {
            return "El rango mayor es más pequeño que el menor";
        }
    }
}
?>
