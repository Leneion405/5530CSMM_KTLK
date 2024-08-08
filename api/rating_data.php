<?php
require_once './dbinfo.php';
session_start();
$date = date('Y-m-d');


$happiness = htmlspecialchars($_POST['happiness']);
$anx = htmlspecialchars($_POST['anx']);
$workloadmanagement = htmlspecialchars($_POST['workloadmanagement']);
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM score WHERE user_id = ? AND date = ?;";

$stmt = $conn->prepare($query);
$stmt->bind_param("is", $user_id, $date);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $stmt = $conn->prepare("UPDATE score SET happiness = ?, anxiety = ? , workloadmanagement = ? WHERE user_id = ? AND date = curdate();");
    $stmt->bind_param("iiii", $happiness, $anx, $workloadmanagement, $user_id);
} else {
    $stmt = $conn->prepare("INSERT INTO score(user_id, happiness, anxiety, workloadmanagement, date) VALUES (?,?,?,?, curdate());");
    $stmt->bind_param("iiii", $user_id, $happiness, $anx, $workloadmanagement);
}

if ($stmt->execute()) {
    echo "Success";
} else {
    die("Error: " . $stmt->error);
}
$stmt->close();
$conn->close();

header("Location: ../app/wellbeing_score.php");
