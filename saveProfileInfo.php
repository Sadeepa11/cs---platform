<?php

require "connection/connection.php";
session_start();

$username = $_POST["username"];
$fName = $_POST["f_name"];
$lName = $_POST["l_name"];
$bio = $_POST["bio"];
$mobile = $_POST["mobile"];


Database::iud("UPDATE `user` SET `bio` = '".$bio."', `first_name` = '".$fName."', `last_name` = '".$lName."', `mobile` = '".$mobile."' , `status` = '1' 
WHERE `email` = '".$_SESSION["user"]["email"]."'");

echo "done";

?>