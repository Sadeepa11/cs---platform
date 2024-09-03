<?php

require "connection/connection.php";

$email = $_POST["email"];
$password = $_POST["password"];
$c_pass = $_POST["c_pass"];
$mobile = $_POST["mobile"];

$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if(empty($email)) {
    echo "empty email";
}  else if (!preg_match($pattern, $email)) {
    echo "invalid email address";
} else if (empty($password)) {
    echo "empty password";
} else if (empty($c_pass)) {
    echo "empty c_pass";
} else if (empty($mobile)) {
    echo "empty mobile";
} else if($c_pass != $password) { 
    echo "unmached password";
} else {

    $table = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."'");
    $rows = $table->num_rows;

    if($rows == 1) {
        echo "already exsits";
    } else {
        Database::iud("INSERT INTO `user` (`email`, `first_name`, `last_name`, `user_name`, `bio`, `password`, `mobile`) 
        VALUES ('".$email."', '', '', '".$email."', '', '".$password."', '".$mobile."')");
        echo "done";
    }

    
}

?>