<?php
//Подключаем соединение с БД
require "connect_to_db.php";

$sql = "UPDATE tasks SET content=:content WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->bindParam(":content", $_POST['content']);
$statement->execute();

header("Location: list.php");
