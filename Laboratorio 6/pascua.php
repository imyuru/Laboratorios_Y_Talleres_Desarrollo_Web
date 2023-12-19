<?php

class Pascua {
    private $year;

    public function __construct($year) {
        $this->year = $year;
    }

    public function calcularFechaPascua() {
        $A = $this->year % 19;
        $B = $this->year % 4;
        $C = $this->year % 7;
        $D = (19 * $A + 24) % 30;
        $E = (2 * $B + 4 * $C + 6 * $D + 5) % 7;
        $N = 22 + $D + $E;
        
        if($N > 31){
            $dia= $N-31;
            $diaPascua="$dia/abril/$this->year";
        }else{
            $diaPascua="$N/marzo/$this->year";
        }

        return $diaPascua;
    }
}
?>

