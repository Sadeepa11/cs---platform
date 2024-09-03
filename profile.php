<?php

require "connection/connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | CS Platform</title>
    <link rel="stylesheet" href="style.css">
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
        <div class="container light-style flex-grow-1 container-p-y">

            <?php

        $user = Database::search("SELECT * FROM `user` WHERE `email` = '".$_SESSION["user"]["email"]."'");
        $tables = $user->num_rows;

        $data = $user->fetch_assoc();

        $details_rs=Database::search("SELECT * FROM `user` WHERE`email`='".$email."'");

        // // $image_rs=Database::search("SELECT*FROM`profile_image`WHERE`user_email`='".$email."'");

        // $address_rs=Database::search("SELECT * FROM`user_has_address`INNER JOIN `city`ON
        // user_has_address.city_id=city.id INNER JOIN `district`ON
        // city.district_id=district.id INNER JOIN `province`ON
        // district.province_id=province.id WHERE `user_email`='".$_SESSION["user"]["email"]."'");
        

        
        // $data = $details_rs->fetch_assoc();
        // // $image_data = $image_rs->fetch_assoc();
        // $address_data = $address_rs->fetch_assoc();
            ?>


            <h4 class="font-weight-bold py-3 mb-4">
                User Account
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                                href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">Change password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-info">Info</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-social-links">Social links</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-notifications">Notifications</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                        class="d-block ui-w-100 rounded-circle">
                                    <div class="media-body ml-4 mt-2">
                                        <label class="btn btn-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <button type="button"
                                            class="btn btn-warning md-btn-flat text-white">Reset</button>
                                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group col-12">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control mb-1" placeholder="@username"
                                            id="username"
                                            value="<?= (isset($data["username"])) ? $data["username"] : "" ?>">
                                    </div>
                                    <div class="col-12 ">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="form-label">First Name</label>
                                                <input placeholder="Steave" type="text" class="form-control col-12"
                                                    id="f_name"
                                                    value="<?= (isset($data["first_name"])) ? $data["first_name"] : "" ?>">
                                            </div>
                                            <div class=" form-group col-6">
                                                <label class="form-label">Last Name</label>
                                                <input placeholder="Smith" type="text" class="form-control col-12"
                                                    id="l_name"
                                                    value="<?= (isset($data["last_name"])) ? $data["last_name"] : "" ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" disabled class="form-control mb-1"
                                            value="<?php echo  $data["email"] ?>">

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-info">
                                <div class="card-body pb-2">
                                    <h5 class="mb-4">Personal</h5>
                                    <div class="form-group">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control" rows="5" placeholder="Your Bio"
                                            id="bio"><?= (isset($data["bio"])) ? $data["bio"] : "" ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Birthday</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <h5 class="mb-4 mt-2">Address</h5>
                                    <div class="form-group">
                                        <label class="form-label">Address Line 1</label>
                                        <input type="text" class="form-control" value="" id="line1">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Address Line 2</label>
                                        <input type="text" class="form-control" value="" id="line2">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <select class="form-select" id="city">
                                            <option selected>Colombo</option>
                                            <option>Kandy</option>
                                            <option>Gampaha</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">District</label>
                                        <select class="form-select" id="district">
                                            <option selected>Colombo</option>
                                            <option>Kandy</option>
                                            <option>Gampaha</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Province</label>
                                        <select class="form-select" id="province">
                                            <option selected>Western</option>
                                            <option>Central</option>
                                            <option>Sabaragamuwa</option>

                                        </select>
                                    </div>

                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body pb-2">
                                    <h5 class="mb-4">Contacts</h5>
                                    <div class="form-group">
                                        <label class="form-label">Mobile</label>
                                        <input id="mobile" type="text" class="form-control"
                                            value="<?= (isset($data["mobile"])) ? $data["mobile"] : "" ?>">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Website</label>
                                        <input type="text" class="form-control" value>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-social-links">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control" value="">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">LinkedIn</label>
                                        <input type="text" class="form-control" value>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Instagram</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-notifications">
                                <div class="card-body pb-2">
                                    <h5 class="mb-4">Activity</h5>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Send notification when someone comments on my
                                                article</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Send Notification me when someone answers on my
                                                forum
                                                thread</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Send notification me when someone follows
                                                me</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="button" class="btn btn-primary" onclick="saveProfileDetails();">Save
                    changes</button>&nbsp;
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/script.js">

    </script>
</body>

</html>