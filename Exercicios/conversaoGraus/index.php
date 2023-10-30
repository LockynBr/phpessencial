<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $grausCelsius = 24;
        $conversao = ($grausCelsius * 1.8) + 32;
        echo "A temperatura é ". $conversao . " Fahrenheit"
        ?>
    </div>
</body>
</html>