<?php
// Minha resolução
function elevarPotencia($numero, $potencia) {
    $resultado = 1;
    $n = 1;
    while($n <= $potencia ) {
        $resultado = $resultado * $numero;
        $n++;
    }
    return $resultado;
}


echo elevarPotencia(2, 2);
echo "<br>";
echo elevarPotencia(4, 3);

