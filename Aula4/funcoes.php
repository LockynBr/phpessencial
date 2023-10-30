<?php

function gerarNumeros($inicio, $fim = 20) {
    $lista = [];
    if($fim <= $inicio) {
        echo "Não dá pra continuar";
    }else {
        for($k = $inicio; $k <= $fim; $k++) {
            $lista[] = $k;
        }
    }
    return $lista;
}

$variavel = gerarNumeros(1, 2);


foreach($variavel as $num) {
    echo $num . "<br>";
}
