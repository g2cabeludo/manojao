<?php 

$nome = "Mano Jão";

echo $nome;
echo "<br>";
$retorno = isset ($nome);

if ($retorno) {
    echo "A variável está definida";
} else {
    echo "A variável nome não está definida";
}


?>


