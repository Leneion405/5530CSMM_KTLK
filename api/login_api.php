<?php
require_once './dbinfo.php';
session_start();

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$query = "SELECT * FROM user WHERE email = '$email';";

$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

if ($result->num_rows > 0) {

    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($password == $row['password']) {
        echo "Login Success";
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['firstname'] . " " . $row['lastname'];
    } else {
        echo "Wrong email or password";
    }
} else {
    echo "Wrong email or password";
}
