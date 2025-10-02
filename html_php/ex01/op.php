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

if($imc < 18.5){
    echo "Você está abaixo do peso";
} else if ($imc >= 18.5 && $imc < 24.99){
    echo "Você está com o peso normal";
} else if ($imc >= 25 && $imc < 29.99 ){
    echo "Você está com sobrepeso";
} else if ($imc >= 30 && $imc < 34.99){
    echo "Você está com obesidade grau I";
} else if ($imc >= 35 && $imc <39.99){
    echo "Você está com obesidade grau II";
} else {
    echo "Você está com obesidade grau III";
}
?>