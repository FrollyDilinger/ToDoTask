<?php
//Настроить форму
//Получить предзаполненные данные
//Переадресация на листинг
session_start();
//Подключаем соединение с БД
require "connect_to_db.php";

//$pdo = new PDO("mysql:host=localhost;dbname=taskmanager;charset=utf8", "root", "root");
$sql = "SELECT * FROM tasks WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($task);
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">

    <title>Edit Task</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>

    </style>
  </head>

  <body>
    <div class="form-wrapper text-center">
      <form class="form-signin" action="update_form.php?id=<?= $task['id'];?>" method="POST" enctype="multipart/form-data">
        <img class="mb-4" src="assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Изменить запись <?= $task['id'];?></h1>
        <label for="inputText" class="sr-only">Название</label>

        <label for="inputText" class="sr-only">Описание</label>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Описание"><?= $task['content']?></textarea>

        <button class="btn btn-lg btn-success btn-block" type="submit">Редактировать</button>

      </form>
    </div>
  </body>
</html>
