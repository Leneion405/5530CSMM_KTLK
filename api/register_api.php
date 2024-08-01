<?php
require_once './dbinfo.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];



$query = "select * from user where email = '$email';";
$result = $conn->query($query);
if (!($result->num_rows > 0)) {
    $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, email, password) VALUES (?, ?, ?, ?);");

    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);


    if ($stmt->execute()) {
        echo "Success";
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
} else {
    echo 'This email has already register';
}

$conn->close();
