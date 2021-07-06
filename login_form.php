<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
<div class="form-wrapper text-center">
    <form class="form-signin" action="login.php" method="post">
        <img class="mb-4" src="assets/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>

        <label for="inpuText" class="sr-only">Login</label>
        <input type="text" id="inputLogin" name="login" class="form-control" placeholder="login" required>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="rememberme" value="yes"> Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Войти</button>
        <a href="register_form.php">Зарегистрироваться</a>

    </form>
</div>
</body>
</html>
