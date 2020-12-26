<?php

$conn = new PDO("sqlsrv:Database=novodbteste;server=localhost\SQLEXPRESS;connectionPooling=0", "", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD )");

$login = "Estacio";
$password = "12135125221224";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

?>