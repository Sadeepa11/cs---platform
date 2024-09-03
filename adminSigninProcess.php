<?php

require "connection/connection.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

if(empty($email)) {
    echo "empty email";
} else if (empty($password)) {
    echo "empty password";
} else {

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $table = Database::search("SELECT * FROM `admin` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    $rows = $table->num_rows;

    if($rows == 1) {
        
        $_SESSION["admin"] = $table->fetch_assoc();
        echo "done";
    } else {
        echo "error";
    }
}




?>