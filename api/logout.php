<?php
include_once 'dbinfo.php';
session_start();

session_destroy();

$conn->close();

header("Location: ../index.php");
exit();
