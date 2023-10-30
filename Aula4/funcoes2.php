<?php
// Soma dos números de inicio ao fim
function gerarNumeros($inicio = 10, $fim = 20) {
    $lista = 0;
    if($fim <= $inicio) {
        echo "Não dá pra continuar";
    }else {
        for($k = $inicio; $k <= $fim; $k++) {
            $lista += $k;
        }
    }
    echo $lista;
}

gerarNumeros($inicio = 10, $fim = 20);