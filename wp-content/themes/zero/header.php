<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="home">
            <div class="header">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Dezign.png">
                <ul class="menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#" id="work-link">WORK</a></li>
                    <li><a href="#" id="about-link">ABOUT</a></li>
                </ul>
            </div>
