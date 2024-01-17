<?php

function limpar_texto($str){ // Função para limpar o número de telefone
    return preg_replace("/[^0-9]/", "", $str); 
}
  
if(count($_POST) > 0) { // Se existir envio, entrará no if

    include('conexao.php'); //Conexão com banco

    $erro = false;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];

    if(empty($nome)) {
        $erro = "Preencha o Nome!";
    }

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { //Validação de Email
        $erro = "Preencha o E-mail!";
    }

    if(!empty($nascimento)) { // Validação de data
        $pedacos = explode('/', $nascimento); // Função que transforma em um array em pedaços
        if(count($pedacos) == 3) {
        $nascimento = implode('-', array_reverse($pedacos)); // Junta o array, mas inverte-os
        } else {
            $erro = "A data de nascimento deve seguir o padrão dia/mês/ano.";
        }
    }

    if(!empty($telefone)) {
        $telefone = limpar_texto($telefone);
        if(strlen($telefone) != 11) {
            $erro = "O telefone deve ser preenchido no padrão (11) 98888-8888.";
        }
    }

    if($erro) {
        echo"<p><strong>ERRO: $erro</strong></p>";
    } else {
        $sql_code = "INSERT INTO clientes (nome, email, telefone, nascimento, data)
        VALUE ('$nome', '$email', '$telefone', '$nascimento', NOW())"; // Codigo SQL
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo"<p><strong>Cliente cadastrado com sucesso!</strong></p>";
            unset($_POST); // A função unset limpa a variável
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <a href="clientes.php">Voltar para lista</a>
    <form method="POST" action="">
        <p>
            <label>Nome</label>
            <input value="<?php if(isset($_POST['nome']))  echo $_POST['nome'];?>" type="text" name="nome">
        </p>
        <p>
            <label>Email</label>
            <input value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" type="email" name="email">
        </p>
        <p>
            <label>Telefone</label>
            <input value="<?php if(isset($_POST['telefone']))  echo $_POST['telefone'];?>" placeholder="(11) 98888-8888" type="text" name="telefone">
        </p>
        <p>
            <label>Data de Nascimento</label>
            <input value="<?php if(isset($_POST['nascimento']))  echo $_POST['nascimento'];?>" type="text" name="nascimento">
        </p>
        <p>
            <button type="submit">Salvar Cliente</button>
        </p>
    </form>
</body>
</html>