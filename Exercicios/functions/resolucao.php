<?php
// Resolução Professor
function potencia($numero, $elevado) {
    $resultado = $numero;
    for($k = 1; $k < $elevado; $k++){
        $resultado = $resultado * $numero;
    }
    return $resultado;
}

echo potencia(2, 5);
echo "<br>";
echo potencia(3, 2);