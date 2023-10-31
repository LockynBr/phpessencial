<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Formulário com PHP</h1>
        <p class="error">* Obrigatório</p>

        Nome: <input type="text" name="nome"> <span class="error">*</span> <br><br>
        Email: <input type="text" name="email"> <span class="error">*</span> <br><br>
        Website: <input type="text" name="website"> <br><br>
        Comentário: <textarea name="comentario" cols="30" rows="10"></textarea> <br><br>
        Gênero: 
        <input value="masculino" type="radio" name="genero"> Masculino
        <input value="feminino" type="radio" name="genero"> Feminino
        <input value="outros" type="radio" name="genero"> Outros <br><br>

        <button name="enviado"  type="submit">Enviar</button>
        <h1>Dados Enviados:</h1>

        <?php 
        if(isset($_POST['enviado'])) {

            if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100) {
                echo "<p class=\"error\">Preencha o campo nome</p>";
                die();
            }

            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<p class=\"error\">Preencha o campo email</p>";
                die();
            }

            if(!empty($_POST['website']) && !filter_var($_POST['website'], FILTER_VALIDATE_URL)){
                echo "<p class=\"error\">Preencha corretamente o campo website</p>";
                die();
            }

            $genero = "Não selecionado";

            if(isset($_POST['genero'])) {
                $genero = $_POST['genero'];
                if($genero != "masculino" && $genero != "feminino" && $genero != "outros") {
                    echo "<p class=\"error\">Preencha corretamente o gênero</p>";
                    die();
                }
            }

            echo "<p><strong>Nome: </strong>" . $_POST['nome'] . "</p>";
            echo "<p><strong>Email: </strong>" . $_POST['email'] . "</p>";
            echo "<p><strong>Website: </strong>" . $_POST['website'] . "</p>";
            echo "<p><strong>Comentário: </strong>" . $_POST['comentario'] . "</p>";
            echo "<p><strong>Gênero: </strong>" . $genero . "</p>";
        }
        ?>
    </form>
</body>
</html>