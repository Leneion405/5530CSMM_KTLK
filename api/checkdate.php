<?php
require_once '../api/dbinfo.php';
date_default_timezone_set('Asia/Yangon');
$date = date('Y-m-d');



$check = false;
$user_id = 1;

$query = "SELECT * FROM score WHERE user_id = ? AND date = ?;";
try {
    $stmt = $conn->prepare($query);
    $stmt->bind_param("is", $user_id, $date);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $check = true;
    }

    $stmt->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
