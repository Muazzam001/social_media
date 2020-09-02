<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Create Group</title>
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
<!--
    <div class="step-number">
        <h3>1</h3>
    </div>
-->
    <div class="text-center container">
        <br>
        <br>
        <h4 class="wow fadeInUp" style="margin-top: 80px;">Create your Group</h4>
        <img src="img/create-page-step-1.png" class="img-responsive img-step-1 wow fadeIn" alt="">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="">
                    <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".2s" placeholder="Group Name" required>
                    <input type="text" class="form-control relative wow fadeInUp" data-wow-delay=".6s" placeholder="Add Friends" required>
                    <select name="" id="" required class="form-control">
                        <option value="">Select Privacy</option>
                        <option value="">Public</option>
                        <option value="">Closed</option>
                        <option value="">Secret</option>
                    </select>
                    <br>
                    <a href="group_page.php" class="btn btn-primary btn-block wow fadeInUp">Create</a>
                </form>
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
