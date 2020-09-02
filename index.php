<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Index</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<style>
    html,
    body {
        background-image: -moz-linear-gradient( 90deg, rgb(0, 143, 199) 0%, rgb(0, 86, 124) 51%, rgb(29, 50, 82) 100%);
        background-image: -webkit-linear-gradient( 90deg, rgb(0, 143, 199) 0%, rgb(0, 86, 124) 51%, rgb(29, 50, 82) 100%);
        background-image: -ms-linear-gradient( 90deg, rgb(0, 143, 199) 0%, rgb(0, 86, 124) 51%, rgb(29, 50, 82) 100%);
        overflow-x: hidden;
    }

</style>

<body class="body-signin">
    <div class="navbar navbar-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/main-logo.png" class="main-logo" alt="">
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline wow fadeIn">
                        <li><a href="sign_in.php" class="btn btn-primary btn-nav">LOGIN</a></li>
                        <li><a href="sign_up.php" class="btn btn-primary btn-nav">SIGN UP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <a href="wall.php">
            <img src="img/logo-map.png" class="logo-map wow fadeInUp" alt="">
        </a>
        <img src="img/map.png" class="img-responsive map wow fadeIn" data-wow-duration="5s" alt="">
    </div>
    <footer>
        <ul class="list-inline text-white text-footer wow fadeIn">
            <li>&copy Copyright 2017</li>
            <li>|</li>
            <li>MeMyLink</li>
        </ul>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
