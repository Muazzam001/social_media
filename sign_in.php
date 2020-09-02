<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Sign In</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flipclock.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<style>
        html,
    body {
        background-image: -moz-linear-gradient( 90deg, rgb(1, 142, 195) 0%, rgb(1, 66, 104) 100%);
        background-image: -webkit-linear-gradient( 90deg, rgb(1, 142, 195) 0%, rgb(1, 66, 104) 100%);
        background-image: -ms-linear-gradient( 90deg, rgb(1, 142, 195) 0%, rgb(1, 66, 104) 100%);
        overflow-x: hidden;

</style>

<body class="body-signin">
    <div class="container-fluid wow fadeIn">
        <div class="dialog text-center">
            <img src="img/logo.png" class="logo-dialog wow fadeIn" alt="">
            <p class="heading-dialog wow fadeInUp">Sign In</p>
            <form action="">
                <input type="text" class="form-control relative wow fadeInUp" placeholder="Username" required>
                <div class="relative">
                    <input type="password" class="form-control wow fadeInUp" placeholder="Password" data-wow-delay=".2s" required>
                    <a href="forgot.php" class="hint">Forgot Password?</a>
                </div>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <button class="btn btn-primary btn-block wow fadeInUp" data-wow-delay=".4s">Sign In</button>
                            <button class="btn btn-facebook btn-block wow fadeInUp" data-wow-delay=".6s">Sign In with Facebook</button>
                            <button class="btn btn-google btn-block wow fadeInUp" data-wow-delay=".8s">Sign In with Google</button>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <p class="wow fadeIn relative">
                New to MeMyLink? <a href="sign_up.php" class="link">Sign Up</a>
            </p>
        </div>
    </div>
    <footer>
        <ul class="list-inline text-white text-footer">
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
