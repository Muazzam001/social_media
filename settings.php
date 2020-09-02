<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Settings</title>
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
        <ul class="list-inline heading-friends">
            <li>
                <h4>General</h4>
            </li>
        </ul>
        <table class="table settings" style="margin-top: 20px !important;">
            <tr>
                <td class="settings-name">Name</td>
                <td class="text-right">
                    <span class="material-icons"><a href="#" class="edit">edit</a></span>
                </td>
            </tr>
            <tr>
                <td class="settings-name">User Name</td>
                <td class="text-right">
                    <span class="material-icons"><a href="#" class="edit">edit</a></span>
                </td>
            </tr>
            <tr>
                <td class="settings-name">Contact</td>
                <td class="text-right">
                    <span class="material-icons"><a href="#" class="edit">edit</a></span>
                </td>
            </tr>
            <tr>
                <td class="settings-name">Ad Account Contact</td>
                <td class="text-right">
                    <span class="material-icons"><a href="#" class="edit">edit</a></span>
                </td>
            </tr>
        </table>
    </div>
    <footer class="footer footer-absolute">
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
</body>

</html>
