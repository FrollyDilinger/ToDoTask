<?php
//Подключаем соединение с БД
require "connect_to_db.php";

session_start();
//Обрезаем входные данные
$content = trim($_POST['content']);

//Валидация на пустоту полей
foreach ($_POST as $input) {
    if(empty($input)) {
        include 'errors.php';
        exit;
    }
}


//Сохранение задачи в базе данных
//$pdo = new PDO("mysql:host=localhost;dbname=todo;charset=utf8", "root", "root");
$sql = "INSERT INTO tasks (content,user_id) VALUES (:content, :user_id)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":content", $content);

$statement->bindParam("user_id", $_SESSION['user_id']);
$task = $statement->execute();



header("Location: list.php");