<?php 
//Объявление переменных и свойств
$driver = 'mysql';
$host = 'localhost';
$db_name = 'userbd';
$db_user = 'admin';
$db_pass = '}{@cker_must_die';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

//Создание объекта класса PDO и обработка исключений подключения к бд
try{
	$pdo = new PDO("$driver:host = $host;dbname = $db_name;charset = $charset",
	$db_user, $db_pass, $options);
}catch(PDOException $e){
	die("Не могу подключиться к базе данных!");
}
