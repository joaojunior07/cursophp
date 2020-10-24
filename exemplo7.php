<?php

	$nome = "joao";
	$nome2 = 'junior';

	var_dump($nome, $nome2);
	echo "<br/>";

	$imprimir = "Meu nome é $nome e o sobrenome $nome2";

	echo ucwords($imprimir);
	echo "<br/>";
	echo str_replace("e", "&", $imprimir);
	echo "<br/>";
	echo $imprimir;
	echo "<br/>";
	$frase = "o gato é grande e feio";

	$q = strrpos($frase, "gato");
	$texto = 
	var_dump($q);



?>