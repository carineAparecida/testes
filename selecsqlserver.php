<?php

$connection = new PDO("sqlsrv:Database=novodbteste;server=localhost\SQLEXPRESS;connectionPooling=0", "", "");
$statement = $connection->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);
?>