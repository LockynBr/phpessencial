<?php
// Aqui estamos passando as variáveis do banco.
$hostname = "localhost"; // Hospedagem
$bancodedados = "livraria"; // Banco de Dados
$usuario = "root"; // Usuário do banco
$senha = ""; // Senha do banco

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados); // Aqui estamos criando um objeto para passar os parametros de acesso. A ordem importa.
if ($mysqli->connect_errno) { // Verificação de erro.
    echo "Falha ao conectar: (". $mysqli->connect_errno . ") " . $mysqli->connect_error; // Aqui irá exprimir o número do erro e qual foi o erro.
} 
