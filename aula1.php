<?php

	$nome = "Junior";
	$sobrenome = "João";
	$nomeCompleto = $sobrenome . " " . $nome;
	echo $nomeCompleto;
	//var_dump($nome);

	if (isset($nome)){
		echo "<br/>";
		echo "Meu nome é ". $nome;
		unset($nome);

	}
	

	

?>