<?php

	$nome = $_GET["usuario"];

	var_dump($nome);

	$ano = (int)$_GET["ano"];
	echo "<br/>";

	var_dump($ano);

	$idade = 2020 - $ano;
	echo "<br/>";
	echo $idade;
	echo "<br/>";
	var_dump($idade);
	echo "<br/>";
	$ip = $_SERVER["SCRIPT_NAME"];
	var_dump($ip);
	echo "<br/>";
	echo $ip;



?>