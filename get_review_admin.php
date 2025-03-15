<?php
include 'boot.php';
if ($_SESSION['user_id'] != 1) {
			echo json_encode(array('status' => 195, 'message' => 'Вы не админ'));
      die;
} else {
  $stmt = pdo()->prepare("SELECT review.*, users.name FROM `review` LEFT JOIN users ON user_id = users.id");
  if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)); 
    die;
  } else {
    echo json_encode(array('status' => 404, 'message' => 'Упс'));
    die;
  }
}
?>