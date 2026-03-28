<?php

class Matematicas {

    public function fibonacci($n) {
        $serie = [];

        if ($n <= 0) return $serie;

        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            $serie[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return $serie;
    }

    public function factorial($n) {
        $resultado = 1;
        $serie = [];

        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
            $serie[] = $resultado;
        }

        return $serie;
    }
}