<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex vh-100 justify-content-center">
        <div class="row align-content-center">

            <div class="offset-lg-3 col-lg-6 col-12">
                <div class="row border border-0 rounded rounded-3 productbox">

                    <!-- content -->
                    <div class="col-12 p-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <h1 class="text-center">Admin Sign In</h1>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label label">Email</label>
                                        <input id="admin_email" type="text" class="form-control"
                                            placeholder="ex : john@gmail.com" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label label">Password</label>
                                        <input id="admin_password" type="text" class="form-control"
                                            placeholder="ex : *****" />
                                    </div>
                                    <div id="admin_error" class="col-12 py-2 text-danger"></div>
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-primary" onclick="AdminSignin();">Sign In</button>
                                    </div>

                                    <div class="col-12 col-lg-6 d-grid">
                                        <a href="login.php" class="btn btn-danger">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->

                    <div class="modal" tabindex="-1" id="verificationModel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Admin Verification</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label class="form-label">Enter your Verification code</label>
                                    <input type="text" class="form-control" id="vcode">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="js/script.js"></script>

</body>

</html>