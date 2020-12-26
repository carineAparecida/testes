<?php

$conn = new PDO("sqlsrv:Database=novodbteste;server=localhost\SQLEXPRESS;connectionPooling=0", "", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); //Nunca usar delete sem where

$id = 1;


$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Delete ok! ";

?>