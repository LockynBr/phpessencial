<?php

$email = $_POST['email'];
$idade = intval($_POST['idade']);

echo "O Nome é: " . $_POST['nome'] . "<br>";
echo "A Idade é: " . $idade . "<br>";
echo "O Email é: " . $email . "<br>";