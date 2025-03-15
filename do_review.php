<?php
header('Content-Type: application/json; charset=utf-8');
include 'boot.php';
if ($_SESSION['user_id']) {
	if(!isset($_FILES) || count($_FILES) == 0){
		echo json_encode(array('status' => 403, 'message' => 'Необходимо добавить фотографию'));
		die;
	}
  	$stmt = pdo()->prepare("SELECT * FROM `review` WHERE user_id = :user_id");
	$stmt->execute(['user_id' => $_SESSION['user_id']]);

	$fileTmpName = $_FILES['image']['tmp_name'];
	$img_name = $_FILES['image']['name'];
	$img_extension = image_type_to_extension($image[2]);
	if (!move_uploaded_file($fileTmpName, $_SERVER['DOCUMENT_ROOT'] . '/img/upload/' . $img_name)) {
		echo json_encode(array('status' => 403, 'message' => 'Неизвестная ошибка'));
		die();
	}

	if ($stmt->rowCount() > 0) {
		echo json_encode(array('status' => 403, 'message' => 'Отзыв можно оставить только 1 раз'));
		die;
	} else {
		move_uploaded_file($_FILES['image']['tmp_name'], '/img/upload/' . $_FILES["image"]["name"]);
		$stmt = pdo()->prepare("INSERT INTO `review` (`image`, `comment`, `user_id`) VALUES (:image, :comment, :user_id)");
		if ($stmt->execute(['image' => $img_name,'comment' => $_POST['comment'],'user_id' => $_SESSION['user_id']])) {
			echo json_encode(array('status' => 201, 'message' => 'Обновись'));
			die;
		}
	}
}
echo json_encode(array('status' => 403, 'message' => 'Неизвестная ошибка'));
