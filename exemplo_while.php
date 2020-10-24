<?php

	/*
	$i = 0;
	while ($i <= 10) {

		echo $i . "<br>";

		$i++;

	}

	echo "<hr>";
	*/

	$condicao = true;

	while ($condicao) {

		$numero = rand(1,10);
		echo $numero. " ";
			
		if ($numero === 7) {
			echo "<br>";
			echo "Meu numero da sorte";
			$condicao = false;
		}

	}
	echo "<br> <br> <hr>";

	$total = 150;
	$desconto = 0.9;

	do {

		$total *= $desconto;

	} while ($total > 100);
		echo $total;

?>