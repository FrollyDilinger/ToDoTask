<?php
session_start();
require "connect_to_db.php";
$sql = "SELECT * FROM tasks WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">

    <title>Show</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    
    <style>
      
    </style>
  </head>

  <body>
    <div class="form-wrapper text-center">
        <h1>
            Задание №
        </h1>

      <h2><?= $task['id'];?></h2>


      <p><?= $task['content'];?></p>
        <a href="list.php">Назад</a>
    </div>
  </body>
</html>
