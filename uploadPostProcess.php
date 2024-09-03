<?php

require "connection/connection.php";
session_start();

$postTitle = $_POST["postTitle"];
$postDescription = $_POST["postDescription"];
$postTags = $_POST["postTags"];
$postLocation = $_POST["postLocation"];
$postCategory = $_POST["postCategory"];

if(empty($postTitle)) {
    echo "empty title";
} else if (empty($postDescription)) {
    echo "empty description";
} else if (empty($postLocation)) {
    echo "empty location";
} else if (empty($postCategory)) {
    echo "unselected category";
} else {
    Database::search("SELECT * FROM `posts`");
        
        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        Database::iud("INSERT INTO `posts` (`category_id`, `created_at`, `d_status_id`, `description`, `location`, `title`, `updated_at`, `user_email`) 
                    VALUES ('".$postCategory."', '".$date."', 0, '".$postDescription."', '".$postLocation."', '".$postTitle."', '".$date."', '".$_SESSION["user"]["email"]."')");

                    echo "done";

        // $image = $_FILES["img"];
        // // Check file type using MIME type
        // $finfo = finfo_open(FILEINFO_MIME_TYPE);
        // $file_type = finfo_file($finfo, $image["tmp_name"]);
        // finfo_close($finfo);

        // $allowed_image_types = array("image/jpeg", "image/png", "image/jpeg", "image/svg+xml");

        // if(!in_array($file_type, $allowed_image_types)) {
        //     echo "Please select a valid image type";
        // } else {
        //     // Check file size limit
        //     $max_size = 10485760; // 1 MB
        //     if($image["size"] > $max_size) {
        //         echo "File size exceeded limit.";
        //     } else {
        //         // Check file name and extension
        //         $file_ext = pathinfo($image["name"], PATHINFO_EXTENSION);
        //         $allowed_image_extensions = array("jpg", "jpeg", "png", ".svg");

        //         // $paint_id = Database::$connection->insert_id;

        //         if(!in_array(strtolower($file_ext), $allowed_image_extensions)) {
        //             echo "Invalid file extension.";
        //         } else {

        //             Database::iud("INSERT INTO `posts` (`category_id`, `created_at`, `d_status_id`, `description`, `location`, `title`, `updated_at`, `user_email`) 
        //             VALUES ('".$postCategory."', '".$date."', 0, '".$postDescription."', '".$postLocation."', '".$postTitle."', '".$date."', '".$_SESSION["user"]["email"]."')");


        //             $pid = Database::$connection->insert_id;

        //             $dir = "assets/images/";
        //             // Set file name and location
        //             $file_name = "paint_" . uniqid() . "." . $file_ext;
        //             $file_location = $dir . $file_name;

        //             // Check file permissions
        //             if(!is_writable($dir)) {
        //                 echo "Destination folder is not writable.";
        //             } else {    
        //                 // Move uploaded file to destination
        //                 if(move_uploaded_file($image["tmp_name"], $file_location)) {
        //                     echo "File uploaded successfully.";
                            
        //                 } else {
        //                     echo "Error uploading file.";
        //                 }
        //             }
        //             Database::iud("INSERT INTO `post_img` (`img_url`, `id`) VALUES
        //                     ('".$file_location."', '".$pid."')");
        //         }
        //         echo "success";
        //     }
        // }
}

?>