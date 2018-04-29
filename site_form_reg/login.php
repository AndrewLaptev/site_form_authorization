<?php
include ('PDO.php');

session_start(); // Начало сессии
$error = '';

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password should not be empty!";
}
else
{

$login = trim($_POST['username']);
$pwd = trim($_POST['password']);

$_SESSION['name'] = $login;

//Выборка полей таблицы из бд
$sel = "SELECT * FROM userbd.users";
$result = $pdo->query($sel);

//Проверка на совпадение логина и пароля
$ind = 0;
while( $row = $result->fetch(PDO::FETCH_ASSOC) ){
	$row['usernames'];
	$row['password'];

	if( ($_POST['username'] == $row['usernames']) && (password_verify($pwd, $row['password']))){
		header("location: profile.php");
		$ind = 1;
	}
}

if ($ind != 1) {
	$error = "Username or Password is invalid";
}
}
}
?>