<?php 

$Username = $_POST["Username"];
$peso = (int) $_POST["peso"];
$altura = (float) $_POST["altura"];
$imc;

$imc = $peso/($altura * $altura);


echo "Olá, $Username <br>";

echo "Peso: $peso <br>";
echo "Altura: $altura <br>";
echo "Seu IMC é: $imc <br> ";
?>