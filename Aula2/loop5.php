<?php

$nomes = array(
    1 => "João", 
    3 => "Maria", 
    4 => "Pedro", 
    2 => "Zé"
);

// $nomes = ["João", "Maria", "Pedro", "Zé"];

// var_dump($nomes);

// for($k = 0; $k < 4; $k++) {
//     echo "<p> " . $nomes[$k] . "</p>";
// }

foreach($nomes as $i => $nome) {
    echo "<p> O índice é: " . $i . " e o nome é: " . $nome . "</p>";
}