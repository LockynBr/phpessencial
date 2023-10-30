<?php

$nomes = array(
    "a" => "João", 
    "b" => "Maria", 
    "c" => "Pedro", 
    "d" => "Zé"
);

echo "<p>Marque a alternativa correta: </p>";
foreach($nomes as $i => $n) {
    echo $i . ") " . $n . "<br>";
}