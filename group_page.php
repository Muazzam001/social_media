<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Group Name</title>
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
    <div class="container-fluid">
        <div class="cover-edit-profile wow fadeIn">
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
    <div class="side-bar-profile">
        <div class="col-md-12 menu-section wow fadeIn">
            <ul class="nav group-nav">
                <li class="wow fadeInUp" data-wow-delay=".2s">
                    <a href="#">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">chat</span></li>
                            <li>Discussion</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="#">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">supervisor_account</span></li>
                            <li>Members</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="#">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">photo</span></li>
                            <li>Photos</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".8s">
                    <a href="#">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">videocam</span></li>
                            <li>Videos</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay="1s">
                    <a href="#">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">event</span></li>
                            <li>Events</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay="1.2s">
                    <a href="#">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">group_add</span></li>
                            <li>Add Members</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-body-profile">
        <section class="card">
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
                    </ul>
                </div>
                <div class="panel-body relative" style="padding: 0px;">
                    <textarea name="" id="" cols="" rows="1" class="status" placeholder="What's on your mind"></textarea>
                    <a href="profile.php"><img src="img/profile-img.png" class="img-status" alt=""></a>
                </div>
                <div class="panel-footer text-right">
                    <div class="row">
                        <ul class="list-inline">
                            <li><button class="btn btn-primary btn-status">Post</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="panel">
                <div class="panel-heading card-heading">
                    <ul class="list-inline inline">
                        <li>
                            <a href="profile.php"><img src="img/profile-img.png" class="card-profile-pic" alt=""></a>
                        </li>
                        <li>
                            <ul class="list-unstyled">
                                <li><a href="profile.php" class="post-user">User Name</a>
                                </li>
                                <li class="post-time relative">July 14 at 3:13 am <span class="material-icons privacy-icon">supervisor_account</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p class="post">When you lie and your friend follows it along and backs you up without you having to say a thing.</p>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <ul class="list-inline inline">
                            <li style="margin-right: 50px;">
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-like">thumb_up</span></li>
                                        <li class="text-black">Like</li>
                                    </ul>
                                </a>
                            </li>
                            <li style="margin-right: 50px;">
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-chat">chat</span></li>
                                        <li class="text-black">Comment</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-share">share</span></li>
                                        <li class="text-black">Share</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <ul class="list-inline inline">
                                    <li><a href="#"><span class="material-icons liked">thumb_up</span></a></li>
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
                <div class="panel-footer" style="border: 0;">
                    <div class="row">
                        <ul class="list-inline inline-flex full-width">
                            <li><img src="img/profile-img.png" class="img-comment" alt=""></li>
                            <li class="full-width relative"><input type="text" class="form-control input-comment full-width" placeholder="Write a comment..">
                                <ul class="smilies list-inline inline-flex">
                                    <li><a href="#"><span class="material-icons mi-smile">insert_emoticon</span></a></li>
                                    <li><a href="#"><span class="material-icons mi-photo">photo</span></a></li>
                                    <li><a href="#"><span class="material-icons mi-gif">gif</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="panel">
                <div class="panel-heading card-heading">
                    <ul class="list-inline inline">
                        <li>
                            <a href="profile.php"><img src="img/profile-img.png" class="card-profile-pic" alt=""></a>
                        </li>
                        <li>
                            <ul class="list-unstyled">
                                <li><a href="profile.php" class="post-user">User Name</a>
                                </li>
                                <li class="post-time relative">July 14 at 3:13 am <span class="material-icons privacy-icon">supervisor_account</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p class="post">When you lie and your friend follows it along and backs you up without you having to say a thing.</p>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <ul class="list-inline inline">
                            <li style="margin-right: 50px;">
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-like">thumb_up</span></li>
                                        <li class="text-black">Like</li>
                                    </ul>
                                </a>
                            </li>
                            <li style="margin-right: 50px;">
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-chat">chat</span></li>
                                        <li class="text-black">Comment</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-share">share</span></li>
                                        <li class="text-black">Share</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <ul class="list-inline inline">
                                    <li><a href="#"><span class="material-icons liked">thumb_up</span></a></li>
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
                <div class="panel-footer" style="border: 0;">
                    <div class="row">
                        <ul class="list-inline inline-flex full-width">
                            <li><img src="img/profile-img.png" class="img-comment" alt=""></li>
                            <li class="full-width relative"><input type="text" class="form-control input-comment full-width" placeholder="Write a comment..">
                                <ul class="smilies list-inline inline-flex">
                                    <li><a href="#"><span class="material-icons mi-smile">insert_emoticon</span></a></li>
                                    <li><a href="#"><span class="material-icons mi-photo">photo</span></a></li>
                                    <li><a href="#"><span class="material-icons mi-gif">gif</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="card">
            <div class="panel">
                <div class="panel-heading card-heading">
                    <ul class="list-inline inline">
                        <li>
                            <a href="profile.php"><img src="img/profile-img.png" class="card-profile-pic" alt=""></a>
                        </li>
                        <li>
                            <ul class="list-unstyled">
                                <li><a href="profile.php" class="post-user">User Name</a>
                                </li>
                                <li class="post-time relative">July 14 at 3:13 am <span class="material-icons privacy-icon">supervisor_account</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p class="post">When you lie and your friend follows it along and backs you up without you having to say a thing.</p>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <ul class="list-inline inline">
                            <li style="margin-right: 50px;">
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-like">thumb_up</span></li>
                                        <li class="text-black">Like</li>
                                    </ul>
                                </a>
                            </li>
                            <li style="margin-right: 50px;">
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-chat">chat</span></li>
                                        <li class="text-black">Comment</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <ul class="list-inline inline-flex">
                                        <li><span class="material-icons mi-share">share</span></li>
                                        <li class="text-black">Share</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <ul class="list-inline inline">
                                    <li><a href="#"><span class="material-icons liked">thumb_up</span></a></li>
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
                <div class="panel-footer" style="border: 0;">
                    <div class="row">
                        <ul class="list-inline inline-flex full-width">
                            <li><img src="img/profile-img.png" class="img-comment" alt=""></li>
                            <li class="full-width relative"><input type="text" class="form-control input-comment full-width" placeholder="Write a comment..">
                                <ul class="smilies list-inline inline-flex">
                                    <li><a href="#"><span class="material-icons mi-smile">insert_emoticon</span></a></li>
                                    <li><a href="#"><span class="material-icons mi-photo">photo</span></a></li>
                                    <li><a href="#"><span class="material-icons mi-gif">gif</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
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
