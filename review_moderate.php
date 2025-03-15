<?php
include 'boot.php';

function getReviews () {
    $stmt = pdo()->query("
        SELECT review.*, users.name FROM `review`
        JOIN `users` ON `user_id` = users.id
        WHERE review.status = 1
        ");
    while ($row = $stmt->fetch()) {
        $arr=[
            "id" => $row['id'],
            "name" => $row['name'],
            "image" => $row['image'],
            "comment" => $row['comment']
        ];
    }
    return $arr;
}


if (isset($_POST['SubmitApprove'])){ 
    $stmt = pdo()->prepare("UPDATE `review` SET `status` = 1 WHERE `id` = :id");
    $stmt->execute(['id' => $_POST['id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    header('Location: admin-panel.php');
}


if (isset($_POST['SubmitReject'])){ 
    $stmt = pdo()->prepare("UPDATE `review` SET `status` = 2 WHERE `id` = :id");
    $stmt->execute(['id' => $_POST['id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    header('Location: admin-panel.php');
    
}
