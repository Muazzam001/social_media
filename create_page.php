<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Create Page</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<style>
    html,
    body {
        background-color: #fff !important;
    }

</style>

<body>
    <?php require_once 'header.php'?>
    <div class="text-center container">
        <br>
        <br>
        <h4 class="wow fadeInUp" style="margin-top: 80px;">Connect with your audience</h4>
        <img src="img/create-page.png" class="img-responsive img-step wow fadeIn" alt="">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a href="create_page_step_1.php" class="btn btn-primary btn-block wow fadeInUp">Get Started</a>
            </div>
        </div>
        <br><br>
        <p class="para wow fadeIn text-center">
            By clicking Get Started, you agree to the
            <a href="terms.php" class="link">My Link Pages terms.</a>
        </p>
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
