<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Edit Profile</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
    <?php require_once 'header.php'?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="img/logo.png" class="logo-small" alt="">
                </div>
                <div class="modal-body">
                    <div class="col-md-12 profile-img-section wow fadeInDown">
                        <ul class="list-inline">
                            <li><img src="img/profile-img.png" class="profile-img" alt=""></li>
                            <li class="profile-name">User Name</li>
                        </ul>
                    </div>
                    <div class="col-md-12 menu-section wow fadeIn">
                        <ul class="nav">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <a href="go-live.php">
                                    <ul class="list-inline inline">
                                        <li>General</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <a href="friends.php">
                                    <ul class="list-inline inline">
                                        <li>Security</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <a href="messages.php">
                                    <ul class="list-inline inline">
                                        <li>Privacy</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <a href="messages.php">
                                    <ul class="list-inline inline">
                                        <li>Terms & Conditions</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-bar">
        <div class="col-md-12 profile-img-section wow fadeInDown">
            <ul class="list-inline">
                <li><img src="img/profile-img.png" class="profile-img" alt=""></li>
                <li class="profile-name">User Name</li>
            </ul>
        </div>
        <div class="col-md-12 menu-section wow fadeIn">
            <ul class="nav">
                <li class="wow fadeInUp" data-wow-delay=".2s">
                    <a href="settings_general.php">
                        <ul class="list-inline inline">
                            <li>General</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="settings_security.php">
                        <ul class="list-inline inline">
                            <li>Security</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="settings_privacy.php">
                        <ul class="list-inline inline">
                            <li>Privacy</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="settings_terms.php">
                        <ul class="list-inline inline">
                            <li>Terms & Conditions</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-body wow fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="cover-edit-profile wow fadeIn" style="margin-top: 10px !important;">
                    <div class="profile-photo-edit-profile">
                        <input type="file" id="imgupload2" style="display:none" />
                        <button class="material-icons camera-edit-profile" id="OpenImgUpload2">camera_alt</button>
                    </div>
                    <div class="cover-photo-edit">
                        <ul class="list-inline">
                            <li><input type="file" id="imgupload2" style="display:none" />
                                <button class="material-icons camera-edit-cover" id="OpenImgUpload2">camera_alt</button></li>
                            <li class="text-white text-uppercase">Add Cover</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <form action="" class="edit-form">
                <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".2s" placeholder="First Name" required>
                <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".4s" placeholder="Last Name" required>
                <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".6s" placeholder="Date of Birth" required>
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="col-xs-12"><p>Gender</p></div>
                    </div>
                    <div class="col-md-6 wow fadeInUp text-right" data-wow-delay=".8s">
                        <form>
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female" style="margin-left: 30px;"> Female
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <a href="create-page-step-3.php" class="btn btn-primary btn-block wow fadeInUp">Save</a>
            </form>
            <br>
            <br>
            <br>
        </div>
    </div>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="" class="edit-form">
                    <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".2s" placeholder="First Name" required>
                    <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".4s" placeholder="Last Name" required>
                    <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".6s" placeholder="Date of Birth" required>
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <p>Gender</p>
                        </div>
                        <div class="col-md-6 wow fadeInUp text-right" data-wow-delay=".8s">
                            <form>
                                <input type="radio" name="gender" value="male" checked> Male
                                <input type="radio" name="gender" value="female" style="margin-left: 30px;"> Female
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="create-page-step-3.php" class="btn btn-primary btn-block wow fadeInUp">Save</a>
                </form>
            </div>
        </div>
    </div>
-->
    <footer class="footer">
        <div class="container-fluid">
            <ul class="list-inline text-white text-footer text-right">
                <li>&copy Copyright 2017</li>
                <li>|</li>
                <li>MeMyLink</li>
            </ul>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();

    </script>
    <script>
        $('#OpenImgUpload2').click(function() {
            $('#imgupload2').trigger('click');
        });

    </script>
</body>

</html>
