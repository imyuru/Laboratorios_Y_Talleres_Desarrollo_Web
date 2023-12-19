<?php
class Matriz {
    private $n;
    private $matriz;

    public function __construct($n) {
        $this->n = $n;
        $this->generarMatriz();
    }

    private function generarMatriz() {
        $this->matriz = array();

        for ($i = 0; $i < $this->n; $i++) {
            $fila = array();
            for ($j = 0; $j < $this->n; $j++) {
                if (($i == 0 && $j == 0) || ($i == 0 && $j == $this->n - 1) || ($i == $this->n - 1 && $j == 0) || ($i == $this->n - 1 && $j == $this->n - 1)) {
                    $fila[] = rand(1, 100);
                } else {
                    $fila[] = 0;
                }
            }
            $this->matriz[] = $fila;
        }
    }

    public function sumarEsquinas() {
        $suma = 0;
        $suma += $this->matriz[0][0]; 
        $suma += $this->matriz[0][$this->n - 1]; 
        $suma += $this->matriz[$this->n - 1][0]; 
        $suma += $this->matriz[$this->n - 1][$this->n - 1]; 

        return $suma;
    }

    public function obtenerMatriz() {
        return $this->matriz;
    }
}
?>
