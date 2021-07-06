<?php
session_start();
//Подключаем соединение с БД
require "connect_to_db.php";
//Соединяемся с БД и достать юзера по id
//$pdo = new PDO("mysql:host=localhost;dbname=todo;charset=utf8", "root", "root");
$sql = "SELECT id, content FROM tasks WHERE user_id=:user_id";
$statement = $pdo->prepare($sql);
//привязка к сессии id пользователя
$statement->bindParam(":user_id", $_SESSION['user_id']);
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">

    <title>Tasks</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">О проекте</h4>
                    <p class="text-muted">Мой первый проект без использования MVC</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white"><?= $_SESSION['login']; ?></h4>
                    <ul class="list-unstyled">
                        <li><a href="logout.php" class="text-white">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">

                <strong>Tasks</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">
    <!--Заголовок-->
    <section class="jumbotron text-center">
        <div class="container">

            <h3 class="jumbotron-heading">Привет, <?php echo $_SESSION['user_name']; ?></h3>
            <p class="lead text-muted">Этот проект позвляет выдавать задания, пока что самому себе</p>
            <p>
                <a href="create-form.php" class="btn btn-primary my-2">Добавить запись</a>
            </p>

        </div>
    </section>

    <div class="album py-5 bg-dark">
        <div class="container">
            <div class="row">
                <?php foreach ($tasks as $task): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <p> #<?= $task['id']; ?></p>
                                <p class="card-text"><?= $task['content']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="show.php?id=<?= $task['id']; ?>"
                                           class="btn btn-sm btn-outline-secondary">Подробнее</a>
                                        <a href="edit-form.php?id=<?= $task['id']; ?>"
                                           class="btn btn-sm btn-outline-secondary">Изменить</a>
                                        <a href="delete.php?id=<?= $task['id']; ?>"
                                           class="btn btn-sm btn-outline-secondary" onclick="confirm('Вы уверены?')">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>



</body>
</html>
