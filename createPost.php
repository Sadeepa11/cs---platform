<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS -->

</head>

<body>
    <div class="dashboard">
        <?php

        include "components/header.php";
        require "connection/connection.php";

        $category_table = Database::search("SELECT * FROM `category`");

        ?>
        <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="post-container">
                        <h2>Create a Post</h2>
                        <div class="form-group">
                            <label for="postImage">Post Image</label>
                            <input type="file" class="form-control custom-file-input" id="postImage">
                        </div>
                        <div class="form-group">
                            <label for="postTitle">Title</label>
                            <input type="text" class="form-control" id="postTitle" placeholder="Enter the post title">
                        </div>
                        <div class="form-group">
                            <label for="postDescription">Description</label>
                            <textarea class="form-control" id="postDescription" rows="4"
                                placeholder="Enter the post description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="postTags">Tags</label>
                            <input type="text" class="form-control" id="postTags"
                                placeholder="Enter tags (comma-separated)">
                        </div>
                        <div class="form-group">
                            <label for="postLocation">Location</label>
                            <input type="text" class="form-control" id="postLocation"
                                placeholder="Enter the post location">
                        </div>
                        <div class="form-group">
                            <label for="postCategory">Category</label>
                            <select class="form-control" id="postCategory">
                                <?php
                                    for ($i = 0; $i < $category_table->num_rows; $i++) {
                                        $data = $category_table->fetch_assoc();
                                    ?>
                                <option value="<?php echo $data["id"] ?>">
                                    <?php echo $data["name"] ?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                        </div>
                        <button class="btn btn-primary mt-2" onclick="createPost();">Create Post</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/script.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    </div>
</body>

</html>