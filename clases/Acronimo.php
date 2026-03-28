<?php

class Acronimo {
    public function generar($frase) {
        $frase = str_replace("-", " ", $frase);
        $frase = preg_replace("/[^a-zA-Z\s]/", "", $frase);

        $palabras = explode(" ", $frase);

        $resultado = "";

        foreach ($palabras as $p) {
            if ($p != "") {
                $resultado .= strtoupper($p[0]);
            }
        }

        return $resultado;
    }
}