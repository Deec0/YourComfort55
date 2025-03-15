<?php
include 'boot.php';
$stmt = pdo()->prepare("SELECT review.*, users.name FROM `review` LEFT JOIN users ON user_id = users.id WHERE review.status = 1");
if($stmt->execute()){
    if($stmt->rowCount() > 0){
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
        die;
    } else {
        echo json_encode(array('status' => 404, 'message' => 'Упс'));
        die;
    }
} else {
    echo json_encode(array('status' => 404, 'message' => 'Упс'));
    die;
}

?>