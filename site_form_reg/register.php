<?php
include('PDO.php');

session_start(); // Начало сессии регистрации

/*$sel = "SELECT * FROM userbd.users";
$result = $pdo->query($sel);
echo '<pre>';
$arr = $result->fetch(PDO::FETCH_ASSOC);
var_dump($arr);*/

$error=''; // Объявление переменной вывода сообщений о событиях
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password should not be empty!";
}
else
{
// Определение переменных логина и пароля 
$login = trim($_POST['username']);
$pwd = trim($_POST['password']);

$hpwd = password_hash($pwd, PASSWORD_DEFAULT);

//Выборка полей таблицы из бд
$sel = "SELECT * FROM userbd.users";
$result = $pdo->query($sel);

//Вспомогательная переменная 
$ind = 0;

//Проверка на существующих одноименных пользователей
while( $row = $result->fetch(PDO::FETCH_ASSOC) ){
	$row['usernames'];
	if($_POST['username'] == $row['usernames']){
		$error = 'User with this name already exists!';
		$ind = 1;
		break;
	}
}

//Внесение пользователя в базу данных
if($ind != 1){
	$pst = "INSERT INTO userbd.users(usernames, password) VALUES (?, ?)";
	//Подготовка запроса
	$stmt = $pdo->prepare($pst);
	//Связывание значения параметров в запросе с переменными
	$stmt->bindParam(1, $login);
	$stmt->bindParam(2, $hpwd);
	//Выполнение подготовленного запроса
	$stmt->execute();
	$error = 'You have successfully registered!';
}
}
}
?>