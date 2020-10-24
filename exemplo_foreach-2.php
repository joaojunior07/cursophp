<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">


</form>

<?php



	if (isset($_GET)) {
			
		var_dump($_GET);
		echo "<hr>";

		foreach ($_GET as $key => $value) {
			echo "Nome do Campo: " . $key;
			echo "Valor do Campo: ". $value;
			echo "<hr>";
		}

	}


?>