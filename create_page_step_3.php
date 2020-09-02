<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Create Page Step 3</title>
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
    <div class="step-number">
        <h3>3</h3>
    </div>
    <div class="text-center container">
        <br>
        <br>
        <h4 class="wow fadeInUp" style="margin-top: 80px;">Create your Page</h4>
        <br>
        <br>
        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-8 col-md-offset-2">
                <div class="cover wow fadeIn">
                    <input type="file" id="imgupload" style="display:none" />
                    <button class="material-icons camera" id="OpenImgUpload">camera_alt</button>
                    <p class="text-white text-uppercase cover-upload-heading">
                        Add cover photo
                    </p>
                </div>
            </div>
        </div>
        <hr class="small-hr">
        <p class="wow fadeIn" style="margin-top: 30px;">Page with profile pictures show up higher in search results</p>
        <br>
        <div class="profile-pic wow fadeIn">
            <input type="file" id="imgupload2" style="display:none" />
            <button class="material-icons camera" id="OpenImgUpload2">camera_alt</button>
            <p class="text-white text-uppercase profile-upload-heading">
                Add photo
            </p>
        </div>
        <br>
        <h5 class="wow fadeInUp">Page Name</h5>
        <br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="">
                    <br>
                    <a href="index.php" class="btn btn-primary btn-block wow fadeInUp">Create</a>
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
        $('#OpenImgUpload').click(function() {
            $('#imgupload').trigger('click');
        });

    </script>
    <script>
        $('#OpenImgUpload2').click(function() {
            $('#imgupload2').trigger('click');
        });

    </script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
