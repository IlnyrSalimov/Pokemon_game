<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . "/Classes/Connection.php";
const DB_NAME = "Pokemon";
const DB_USER = "root";
const DB_PASSWORD = "";


$email = $_POST['email'];
$username = $_POST['name'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$db = Connection::connect(DB_NAME, DB_USER, DB_PASSWORD);
$stmt = $db->prepare('SELECT * FROM users WHERE email = ? OR username = ?');

$stmt->execute([$email, $username]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    echo json_encode(array('value' => 'register complete'));
    $stmt = $db->prepare('INSERT INTO users (email, username,password, gender) VALUES (?,?,?,?)');
    $stmt->execute([$email, $username, $password,$gender]);
} else {
    $json = array();
    if ($result['username'] == $username) {$json["username"] = 'this name already exists';}
    if ($result['email'] == $email) {$json["email"] = 'this email already exists';}
    echo json_encode($json);
}