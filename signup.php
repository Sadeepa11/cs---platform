<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS Platform | Sign Up</title>

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
    <div class="bg-img"></div>
    <div class="overlay"></div>
    <h1 class="text-center mt-5 title">Welcome to Commiunity Support Platform</h1>
    <h3 class="text-center mt-5 sub-title">Register to be a partner</h3>
    <div class="login-form">
        <div class="px-5">
            <div class="w-100 mb-3">
                <label for="email" class="form-label">Enter your email</label>
                <input type="email" placeholder="example@gmail.com" autocomplete="off" id="email_signup"
                    class="form-control w-100">
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6 col-md-12">
                    <label for="password" class="form-label">Enter your Password</label>
                    <input type="password" placeholder="*****" id="password_signup" class="form-control">
                </div>
                <div class="mb-3 col-lg-6 col-md-12">
                    <label for="confirm-password" class="form-label">Confirm your Password</label>
                    <input type="password" placeholder="*****" id="confirm_password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-12 col-md-12">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" placeholder="0712233456" id="mobile" class="form-control">
                </div>
            </div>

            <div class="row">
                <div id="error_signup" class="col-12 mt-1 mb-1 text-danger"></div>
            </div>

            <button class="btn btn-sm btn-primary w-100 mb-3" onclick="registerUser()">Register</button>
            <a href="login.php" class="btn btn-sm btn-warning w-100">Already have an account ...login</a>
        </div>
    </div>
    <?php
    include "components/copyright.php"
    ?>

    <script src="js/script.js"></script>
</body>

</html>