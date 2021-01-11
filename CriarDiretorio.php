<?php

$name = "images";

if(!is_dir($name)){

	mkdir($name);
	echo "Diretório criado com sucesso!";

}
	else {
		echo "Já existe o diretório";
}


?>