<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>

    </style>
</head>
<body>
<div class="form-wrapper text-center">
    <form class="form-signin" action="register.php" method="post">
        <img class="mb-4" src="assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
        <label for="inputText" class="sr-only">Имя</label>
        <input type="text" id="inputText" class="form-control" placeholder="Имя" autofocus name="username">
        <label for="inputText" class="sr-only">Login</label>
        <input type="text" id="inputLogin" name="login" class="form-control" placeholder="login" required>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" name="password">
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">
        <button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Зарегистрироваться</button>
        <a href="login_form.php">Войти</a>

    </form>
</div>
</body>
</html>

