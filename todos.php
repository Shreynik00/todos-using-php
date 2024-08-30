<?php

try{


$pdo = new PDO(dsn:'mysql:host=localhost;dbname=todos',username:'root',password:'123456');
}
catch(PDOException $e)
{
    echo $e->getMessage();
    exit;
}

$query = 'SELECT * FROM untitled_table_1';

$statement = $pdo->prepare($query);

$statement->execute();

$rows = $statement->fetchAll();
include 'index.template.php';
?>