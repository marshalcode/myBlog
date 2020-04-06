<?php include_once("conn/conn.php"); ?>
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
    </head>
    <body>


    <!-- header -->
        <?php include("includes/header.php"); ?>

    <!--         header ending        -->

    
    <!-- posts -->
        <div class="page-wrapper">
            <?php include("includes/posts.php") ?>
        </div>

    <!-- posts ending -->

    <!-- footer -->
        <?php include("includes/footer.php"); ?>
        
    <!-- footer ending -->

        <script src="assets/js/main.js"></script>
    </body>
</html>