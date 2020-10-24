<?php

$nome = "joão";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "junior";
	echo $nome . " teste 2";
}

teste();
echo "<br/>";
teste2();

?>