<?php 
// Hora em segundos
// echo time();

// Converte uma data do padrão americano em timestamp
// echo strtotime("2004-08-28");

// Como ver quando segundos tem entre as datas
// echo (time() - strtotime("2004-08-28"))/86400;

// Passando os paramentros especificos é possivel conseguir vários resultados
// echo date("d/m/Y H:i", strtotime("2004-08-28 22:50"));



//Mostrar a data atual em timestamp
echo "<p>Data atual em timestamp: " . time() . "</p>";

//Transformar timestamp em data atual
echo "<p>Transformar timestamp em data atual: " . date("d/m/Y", time()) . "</p>";

//Transformar data atual em timestamp
echo "<p>Transformar data atual em timestamp: " . strtotime("2024-02-24") . "</p>";

//Somar 100 dias em uma data
$data = "2024-02-24";
$nova_data = strtotime($data) + (86400 * 100);
echo "<p>Somar 100 dias em uma data: " . date("d/m/Y", $nova_data) . "</p>";

//Subtrair 10 dias em uma data
$data = "2024-02-24";
$nova_data = strtotime($data) - (86400 * 10);
echo "<p>Subtrair 10 dias em uma data: " . date("d/m/Y", $nova_data) . "</p>";

//Convertendo o timestamp pro banco de dados
echo "<p>Convertendo o timestamp pro banco de dados: " . date("Y-m-d H:i:s", time()) . "</p>";

//Descobrir dia da semana de uma data
echo "<p>Descobrir dia da semana de uma data: " . date("D", $nova_data) . "</p>";

?>