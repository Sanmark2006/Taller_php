<?php

class Arbol {

    public function construirDesdePreIn($preorden, $inorden) {

        if (empty($preorden) || empty($inorden)) {
            return null;
        }

        $raiz = $preorden[0];

        $indice = array_search($raiz, $inorden);

        $izquierdaIn = array_slice($inorden, 0, $indice);
        $derechaIn = array_slice($inorden, $indice + 1);

        $izquierdaPre = array_slice($preorden, 1, count($izquierdaIn));
        $derechaPre = array_slice($preorden, 1 + count($izquierdaIn));

        return [
            "valor" => $raiz,
            "izquierda" => $this->construirDesdePreIn($izquierdaPre, $izquierdaIn),
            "derecha" => $this->construirDesdePreIn($derechaPre, $derechaIn)
        ];
    }

    public function mostrar($nodo, $nivel = 0) {
        if ($nodo == null) return "";

        $resultado = str_repeat("--", $nivel) . $nodo["valor"] . "<br>";

        $resultado .= $this->mostrar($nodo["izquierda"], $nivel + 1);
        $resultado .= $this->mostrar($nodo["derecha"], $nivel + 1);

        return $resultado;
    }
}