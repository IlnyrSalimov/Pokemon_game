<?php
require_once __DIR__ . "/Classes/Connection.php";
const DB_NAME = "Pokemon";
//const TABLE_NAME = "users";
const DB_USER = "root";
const DB_PASSWORD = "";

$email = $_POST['email'];

$db = Connection::connect(DB_NAME, DB_USER, DB_PASSWORD);
$sql = 'SELECT email FROM users WHERE email = ?';
$stmp = $db->prepare($sql);
$stmp->execute([$email]);

$result = $stmp->fetch();
//var_dump($result[0]);

if (isset($result[0])) echo json_encode("Такая почта есть",JSON_UNESCAPED_UNICODE);
else echo json_encode("Такой почты нет",JSON_UNESCAPED_UNICODE);;