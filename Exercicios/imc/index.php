<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
</head>
<body>
    <div>
        <p>Seu IMC está na faixa: 
            <strong>
            <?php
            $peso = 80;
            $altura = 1.80;
            $imc = $peso / ($altura * $altura);
            $faixa = "";
            if ($imc < 18.5) {
                $faixa = "Magreza";
            } else if($imc >= 18.5 && $imc < 24.9) {
                $faixa = "Normal";
            } else if($imc >= 24.9 && $imc < 30) {
                $faixa = "Sobrepeso";
            } else {
                $faixa = "Obesidade";
            }
            echo $faixa;
            ?>
            </strong>
        </p>
    </div>    
</body>
</html>
