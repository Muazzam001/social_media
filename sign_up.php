<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Sign Up</title>
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
        <div class="row">
            <div class="col-md-12">
                <div class="dialog text-center">
                    <img src="img/logo.png" class="logo-dialog wow fadeIn" alt="">
                    <p class="heading-dialog wow fadeInUp">Sign Up</p>
                    <form action="">
                        <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".2s" placeholder="Full Name" required>
                        <input type="email" class="form-control relative wow fadeInUp" data-wow-delay=".4s" placeholder="Email" required>
                        <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".6s" placeholder="Address" required>
                        <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".8s" placeholder="Country" required>
                        <input type="text" class="form-control relative wow fadeInUp" data-wow-delay="1s" placeholder="Username" required>
                        <input type="password" class="form-control relative wow fadeInUp" data-wow-delay="1.2s" placeholder="Password" required>
                        <input type="password" class="form-control relative wow fadeInUp" data-wow-delay="1.4s" placeholder="Confirm Password" required>
                        <div class="relative">
                            <br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <button class="btn btn-primary btn-block wow fadeInUp" data-wow-delay="1.6s">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                    <a href="terms.php" class="link wow fadeIn">Terms & Conditions</a>
                </div>
            </div>
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
