<?php
define('DB_HOST','localhost');
define('DB_USER','root');// Логин БД
define('DB_PASSWORD','');// Пароль БД
define('DB_NANE','gaz'); // Имя БД

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NANE);
if ($mysql->connect_errno) exit('Ошибка покдючения к БД');
$mysql->set_charset("utf8");
$mysql->close();
// Собираем данные для запроса
$name = 12;
$data = array( 'name' => $name ); 
// Подготавливаем SQL-запрос
//$query = $db->prepare("INSERT INTO 'tach' (name, text) values (:name, :text)");
// Выполняем запрос с данными
$kart_sber = mysqli_real_escape_string($conect, trim($_POST['kart_sber']));
$search = mysqli_query($mysql, "SELECT `ID` FROM `tach`");
$resultSearch =mysqli_fetch_array($search);
//$query->execute($data);
?>