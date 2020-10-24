<?php

$idade = 21;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idade < $idadeCrianca){

	echo "Criança";

} else if ($idade < $idadeMaior){

	echo "Adolescente";

} else if ($idade < $idadeMelhor){

	echo "Adulto";

} else {

	echo "Idoso";

}

echo "<br> <br>";


echo ($idade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>