<?php

require "connection/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Support Platform Dashboard</title>

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
      ?>
        <main>
            <section class="posts">
                <?php

                $posts = Database::search("SELECT * FROM `posts`
                INNER JOIN `category` ON `posts`.`category_id` = `category`.`id`
                INNER JOIN `d_status` ON `posts`.`d_status_id` = `d_status`.`id`
                INNER JOIN `user` ON `posts`.`user_email` = `user`.`email`
                INNER JOIN `post_img` ON `posts`.`id` = `post_img`.`post_id`");
                $tables = $posts->num_rows;

                for($i = 0; $i< $tables; $i++) {
                    $data = $posts->fetch_assoc();
                    ?>
                <div class="post-card d-lg-flex d-md-block justify-content-between flex-row-reverse">
                    <div class="pb-sm-2 pb-lg-0 post_img">
                        <img src="<?php echo $data["img_url"] ?>" alt="">
                    </div>
                    <div>
                        <h2 class="pt-1">Post Title: <?php echo $data["title"] ?></h2>
                        <p>Category: <?php echo $data["name"] ?></p>
                        <p>Location: <?php echo $data["location"] ?></p>
                        <p>Posted on: <?php echo $data["posted_at"] ?></p>
                        <p>Tags: #Groceries #HelpNeeded</p>
                        <p>Posted by: <?php echo $data["email"] ?></p>
                        <div class="post-actions">
                            <button class="btn btn-primary">Upvote</button>
                            <button class="btn btn-warning">Comment</button>
                        </div>
                    </div>


                </div>
                <?php
                }

                ?>

            </section>


            <aside class="sidebar">
                <h2>Filters</h2>
                <!-- Add filter options here -->
            </aside>
        </main>

        <?php
        include "footer.php";
        
        ?>

    </div>

</body>

</html>