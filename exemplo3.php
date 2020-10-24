<?php

$nome = "joão"; // variavel string
$site = "www.google.com.br"; 
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

$frutas = array("abacaxi", "laranja", "maca");

echo $frutas[2];

$nascimento = new DateTime();
echo "<br/>";
var_dump($nascimento);
echo "<br/>";
$arquivo = fopen("exemplo3.php", "r");
var_dump($arquivo);
echo "<br/>";
$nulo = NULL;
var_dump($nulo);

?>