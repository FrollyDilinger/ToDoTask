<?php
//Подключаем соединение с БД
require "connect_to_db.php";


session_start();
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$remember = $_POST['rememberMe'];


//если нажат чекбокс Запомнить меня, то записываем пользователя в сессию на 30 дней
if(isset($remember) AND $remember == "yes"){
    setcookie("save", $remember, (time()+86400)*30);
}

//проверка вводимых данных на пустоту
foreach ($_POST as $input) {
	if(empty($input)) {
		include 'errors.php';
		exit;
	}
}
//Подготовка и выполнение запроса к БД
//$pdo = new PDO('mysql:host=localhost;dbname=todo', 'root', 'root');
$sql = 'SELECT id, login, username,status FROM users WHERE login=:login AND password=:password';
$statement = $pdo->prepare($sql);

//Хеширование пароля в md5
$password = md5($password);
//передача параметров вместо :login и :password
$statement->bindParam(':login', $login);
$statement->bindParam(':password', $password);
$statement->execute();
//получаем результат в виде ассоциативного массива
$user = $statement->fetch(PDO::FETCH_ASSOC);


//Не нашли пользователя
if(!$user) {
	$errorMessage = "Неверный логин и пароль";
	include 'errors.php';
	exit;
}
//Если нашли пользователя- Записываем данные в сессию
$_SESSION['user_id'] = $user['id'];
$_SESSION['login'] = $user['login'];
$_SESSION['user_name'] = $user['username'];
$_SESSION['status'] = $user['status'];
if ($_SESSION['status'] == 'user'){
    header("Location: listUser.php");
}
else
{
    header("Location: list.php");
}

//Переадресация


