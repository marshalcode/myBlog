<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>veroxyle</title>
    <link rel='shortcut icon' href='favicon.png' type='image/x-icon' />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main2.css">
    <script src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/images/logo.png" alt="logo" height="48" width="48">
            <h1 class="logo-text">vero<span>xyle</span></h1>
        </div>

        <i class="fa fa-bars menu-toggle"></i>
        <i class="fa fa-times menu-close"></i>

        <ul class="nav">
            <li><a href="#">Latest</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">How-to</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Blog</a></li>
            <!-- <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li> -->
            <li>
                <a href="#">
                <i class="fa fa-user"></i>    
                veroxyle
                <i class="fa fa-chevron-down" style="font-size: 0.8em;"></i>
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <div class="page-wrapper">
        <?php include("includes/post.php") ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about"></div>
            <div class="footer-section links"></div>
            <div class="footer-section contact-form"></div>
            <a href="login.php">log in</a>
        </div>

        <div class="footer-bottom">
            &copy; veroxyle | Designed by team veroxyle
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>