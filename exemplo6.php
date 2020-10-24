<?php

 $nome = "João";

 echo $nome . " Junior";

 $nome .= " Treinamentos";
 echo "<br/>";
 echo $nome;
	echo "<br/>";

$valorTotal = 0;
$valorTotal += 100;
$valorTotal -= 10;
$valorTotal /= 2;

echo $valorTotal;

echo "<br/>";

$a = 45;
$b = 50;
$c = NULL;

echo $a + $b;
echo "<br/>";

var_dump($a <=> $b); //se o a for maior volta 1 igual volta 0 e o b maior volta -1

echo "<br/>";

echo $c ?? $b;
echo "<br/>";
//operadores incrementais

$d = 10;
echo ++$d; // incrementa antes 
echo "<br/>";
echo --$d;
echo "<br/>";

$resultado = (10 + 2) / 3 ;
echo $resultado;
echo "<br/>";











?>