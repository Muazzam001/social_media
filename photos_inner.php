<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Profile Photos</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
    <div class="navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9">
                    <a href="index.php"><img src="img/main-logo.png" class="main-logo" alt=""></a>
                    <a href="#myModal" data-toggle="modal" class="pull-right hidden-sm hidden-md hidden-lg">
                        <span class="material-icons menu">menu</span>
                    </a>
                </div>
                <div class="col-sm-3 text-right relative">
                    <input type="text" class="form-control" placeholder="Search here.." id="search">
                    <a href="#"><span class="material-icons search">search</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
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
                                        <li><span class="material-icons">videocam</span></li>
                                        <li>Go Live</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <a href="friends.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">supervisor_account</span></li>
                                        <li>Friends</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <a href="messages.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">chat</span></li>
                                        <li>Messages<span class="badge">3</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".8s">
                                <a href="photos.php">
                                    <ul class="list-inline inline active">
                                        <li><span class="material-icons">insert_photo</span></li>
                                        <li>Photos</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="1s">
                                <a href="videos.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">videocam</span></li>
                                        <li>Videos</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 profile-img-section wow fadeInDown">
                        <ul class="nav">
                            <li>
                                <a href="groups.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">supervisor_account</span></li>
                                        <li>Groups</li>
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
                    <a href="go-live.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">videocam</span></li>
                            <li>Go Live</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="friends.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">supervisor_account</span></li>
                            <li>Friends</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="messages.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">chat</span></li>
                            <li>Messages<span class="badge">3</span></li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".8s">
                    <a href="photos.php">
                        <ul class="list-inline inline active">
                            <li><span class="material-icons">insert_photo</span></li>
                            <li>Photos</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay="1s">
                    <a href="videos.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">videocam</span></li>
                            <li>Videos</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-12 profile-img-section wow fadeInDown">
            <ul class="nav">
                <li>
                    <a href="groups.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">supervisor_account</span></li>
                            <li>Groups</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-body wow fadeIn" style="margin-bottom: 150px !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-inline heading-friends">
                        <li>
                            <h4>Profile Photos</h4>
                        </li>
                        <li>
                            <h4>|</h4>
                        </li>
                        <li>
                            <h4>8</h4>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="photos.php">Photos</a></li>
                        <li class="active">Profile Photos</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
