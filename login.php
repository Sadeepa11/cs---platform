<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS Platform</title>

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
    <h1 class="text-center title">Welcome to Community Support Platform</h1>
    <div class="container login-form">
        <div class="col-12 px-5">
            <div class="w-100 mb-3">
                <label for="email" class="form-label">Enter your email</label>
                <input type="email" placeholder="example@gmail.com" autocomplete="off" id="login_email"
                    class="form-control w-100">
            </div>
            <div class="w-100 mb-3">
                <label for="password" class="form-label">Enter your Password</label>
                <input type="password" placeholder="*****" id="login_password" class="form-control">
            </div>
            <div id="error" class="col-12 py-1 text-danger"></div>
            <div class="d-flex justify-content-between">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="mb-3 fp">
                    <a href="adminSignin.php">Admin Signin</a>
                </div>
            </div>
            <button href="dashboard.php" class="btn btn-sm btn-primary w-100" onclick="userLogin()">Login</button>
            <a href="signup.php" class="btn btn-sm btn-warning w-100 mt-3">Register</a>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>