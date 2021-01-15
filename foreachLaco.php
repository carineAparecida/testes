<?php
<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="ok">

</form>
	foreach($_GET as $key => $value) {

		echo "Nome do campo: " .$key."<br>";
		echo "Valor do Campo" .$value."<>";
		echo"<hr>";
	}


?>