<?php

$connection = new PDO("sqlsrv:Database=nomedobanco;server=localhost\SQLEXPRESS;connectionPooling=0", "usuario", "senha");
$statement = $connection->prepare("SELECT * FROM nome_databela ORDER BY nomecoluna;");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($users);
?>