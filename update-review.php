<?php
include 'boot.php';
$stmt = pdo()->prepare("UPDATE review SET status = :status WHERE id = :id");
if($stmt->execute(['status' => $_GET['status'], 'id' => $_GET['id']])){
    echo json_encode(array('status' => '201', 'mess' => 'Успешно'));
    die;
}
echo json_encode(array('status' => '404', 'mess' => 'Пездюк'));