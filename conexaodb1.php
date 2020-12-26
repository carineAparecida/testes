<?php

$con = new mysqli("localhost", "root", "", "dbphp7"); //O segundo parâmetro é a senha

if ($con->connect_error){

	echo "Error". $con->connect_error;
}

$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $senha);

$login = "user";
$senha = "12345";

$stmt->execute();

$login = "root";
$senha = "!@#$";

$stmt->execute();

?>