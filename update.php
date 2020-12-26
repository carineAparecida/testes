<?php

$conn = new PDO("sqlsrv:Database=novodbteste;server=localhost\SQLEXPRESS;connectionPooling=0", "", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Lucia";
$password = "kikinha";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados alterados com sucesso! ";

?>