<?php
$host = 'localhost';
$usrname = 'thanlwin';
$pwd = 'Thanlwin123';
$dbname = 'ktlk_coursework';
$port = '3307';
$conn = new mysqli($host, $usrname, $pwd, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
