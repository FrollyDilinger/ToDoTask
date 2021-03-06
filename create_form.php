
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">

    <title>Create Task</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
<div class="form-wrapper text-center">
    <form class="form-signin" action="create.php" method="post" enctype="multipart/form-data">
        <img class="mb-4" src="assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Добавить задание</h1>
        <label for="inputText" class="sr-only">Кому выдать</label>
        <input type="text" id="inputText" class="form-control" placeholder="Личный номер получателя" name="user_id" required>

        <label for="inputText" class="sr-only">Описание</label>
            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Описание"></textarea>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Выдать</button>

    </form>
</div>
</body>
</html>
