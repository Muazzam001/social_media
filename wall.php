<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Home</title>
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
                                    <ul class="list-inline inline">
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
                            <li>
                                <a href="pages.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">flag</span></li>
                                        <li>Pages</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="events.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">event</span></li>
                                        <li>Events</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="pokes.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">touch_app</span></li>
                                        <li>Pokes</li>
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
                        <ul class="list-inline inline">
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
                <li>
                    <a href="pages.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">flag</span></li>
                            <li>Pages</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="events.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">event</span></li>
                            <li>Events</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="pokes.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">touch_app</span></li>
                            <li>Pokes</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="panels-main">
        <div class="main-body-panels wow fadeIn">
            <div class="panel panel-status">
                <div class="panel-heading" style="text-align: center !important;">
                    <ul class="list-inline inline inline-flex center">
                        <li style="margin-right: 80px;">
                            <a href="#">
                                <ul class="list-inline inline">
                                    <li>
                                        <span class="material-icons mi-edit">edit</span>
                                    </li>
                                    <li class="text-black">Status</li>
                                </ul>
                            </a>
                        </li>
                        <li style="margin-right: 80px;">
                            <a href="#">
                                <ul class="list-inline inline">
                                    <li>
                                        <span class="material-icons mi-photo">photo</span>
                                    </li>
                                    <li class="text-black">Photo / Video</li>
                                </ul>
                            </a>
                        </li>
                        <li style="margin-right: 80px;">
                            <a href="#">
                                <ul class="list-inline inline">
                                    <li>
                                        <span class="material-icons mi-cam">videocam</span>
                                    </li>
                                    <li class="text-black">Live Video</li>
                                </ul>
                            </a>
                        </li>
                        <li style="margin-right: 80px;">
                            <a href="#">
                                <ul class="list-inline inline">
                                    <li>
                                        <span class="material-icons mi-event">event</span>
                                    </li>
                                    <li class="text-black">Event</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body relative" style="padding: 0px;">
                    <textarea name="" id="" cols="" rows="1" class="status" placeholder="What's on your mind"></textarea>
                    <a href="profile.php"><img src="img/profile-img.png" class="img-status" alt=""></a>
                </div>
                <div class="panel-footer text-right">
                    <div class="row">
                        <ul class="list-inline">
                            <li>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 10px !important;">
                          Friends <span class="caret"></span>
                        </button>
                                    <ul class="dropdown-menu" id="friends-dropdown">
                                        <li>
                                            <a href="#">
                                                <ul class="list-unstyled">
                                                    <li class="text-blue">Public</li>
                                                    <li><small>Anyone can see the group, its members and <br> their posts.</small></li>
                                                </ul>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <ul class="list-unstyled">
                                                    <li class="text-blue">Closed</li>
                                                    <li><small>Anyone can find the group and see who’s <br> in it. Only members can see posts.</small></li>
                                                </ul>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <ul class="list-unstyled">
                                                    <li class="text-blue">Secret</li>
                                                    <li><small>Only members can find the group and see posts.</small></li>
                                                </ul>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><button class="btn btn-primary btn-status">Post</button></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="main-body-panels wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="list-inline inline">
                                <li><img src="img/profile-img-lg.png" class="profile-img" alt=""></li>
                                <li>
                                    <ul class="list-unstyled panel-name">
                                        <li>
                                            <h5>Food</h5>
                                        </li>
                                        <li>
                                            <p>5 min</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <p class="para">
                                You have got a big bruise on you are head
                            </p>
                            <br>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <ul class="list-inline inline">
                                            <li><a href="#"><span class="material-icons like">thumb_up</span></a></li>
                                            <li>87</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-inline inline pull-right">
                                            <li class="comment"><a href="#">20 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body-panels wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="list-inline inline">
                                <li><img src="img/profile-img-lg.png" class="profile-img" alt=""></li>
                                <li>
                                    <ul class="list-unstyled panel-name">
                                        <li>
                                            <h5>Food</h5>
                                        </li>
                                        <li>
                                            <p>5 min</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <p class="para">
                                You have got a big bruise on you are head
                            </p>
                            <br>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <ul class="list-inline inline">
                                            <li><a href="#"><span class="material-icons like">thumb_up</span></a></li>
                                            <li>87</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-inline inline pull-right">
                                            <li class="comment"><a href="#">20 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body-panels wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="list-inline inline">
                                <li><img src="img/profile-img-lg.png" class="profile-img" alt=""></li>
                                <li>
                                    <ul class="list-unstyled panel-name">
                                        <li>
                                            <h5>Food</h5>
                                        </li>
                                        <li>
                                            <p>5 min</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <p class="para">
                                You have got a big bruise on you are head
                            </p>
                            <br>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <ul class="list-inline inline">
                                            <li><a href="#"><span class="material-icons like">thumb_up</span></a></li>
                                            <li>87</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-inline inline pull-right">
                                            <li class="comment"><a href="#">20 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body-panels wow fadeIn" style="margin-bottom: 100px !important;">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="list-inline inline">
                                <li><img src="img/profile-img-lg.png" class="profile-img" alt=""></li>
                                <li>
                                    <ul class="list-unstyled panel-name">
                                        <li>
                                            <h5>Food</h5>
                                        </li>
                                        <li>
                                            <p>5 min</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <p class="para">
                                You have got a big bruise on you are head
                            </p>
                            <br>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <ul class="list-inline inline">
                                            <li><a href="#"><span class="material-icons like">thumb_up</span></a></li>
                                            <li>87</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-inline inline pull-right">
                                            <li class="comment"><a href="#">20 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
