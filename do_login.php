<?php
header('Content-Type: application/json; charset=utf-8');
include 'boot.php';
$data = json_decode(file_get_contents("php://input"));

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username LIMIT 0,1");

if($stmt->execute(['username' => $data->username])){
	if ($stmt->rowCount() > 0) {
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($data->password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];

            if ($user['id'] == 1) {
                echo json_encode(array('status' => 195, 'message' => 'Вы админ'));
                die;
            }
            echo json_encode(array('status' => 201, 'message' => 'Обновись'));
            die;
        } else {
            echo json_encode(array('status' => 403, 'message' => 'Неверный логин или пароль'));
            die;
        }
	}
}

