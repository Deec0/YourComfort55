<?php
header('Content-Type: application/json; charset=utf-8');
include 'boot.php';
$data = json_decode(file_get_contents("php://input"));
$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $data->username]);
if ($stmt->rowCount() > 0) {
	echo json_encode(array('status' => 403, 'message' => 'Этот логин уже занят'));
	die;
}

$stmt = pdo()->prepare("INSERT INTO `users` (`username`, `name`, `password`) VALUES (:username, :name, :password)");
if($stmt->execute([
	'username' => $data->username,
	'name' => $data->name,
	'password' => password_hash($data->password, PASSWORD_DEFAULT),
])){
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $data->username]);
if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
	$_SESSION['username'] = $data->username;
	$_SESSION['name'] = $data->name;
	$_SESSION['user_id'] = $row['id'];
	echo json_encode(array('status' => 201, 'message' => 'Обновись'));
	die;
}
echo json_encode(array('status' => 403, 'message' => 'Неизвестная ошибка, попробуйте позже'));