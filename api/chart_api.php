<?php
require_once './dbinfo.php';
session_start();
$user_id = $_SESSION['user_id'];

// $query = "SELECT * FROM score WHERE user_id = '$user_id';";
$query = "SELECT * FROM score WHERE user_id = 1;";

$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo (json_encode($row));
}
