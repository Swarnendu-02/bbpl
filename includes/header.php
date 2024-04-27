<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BBPL</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="fullPage very simple demo." />
    <meta name="keywords" content="fullpage,jquery,demo,simple" />
    <meta name="Resource-type" content="Document" />
    <link rel="stylesheet" type="text/css" href="bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responcive.css">
    <link href="css/owl.carousel.min.css?v=2" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.min.css?v=2" rel="stylesheet" type="text/css">
    <link href="css/odometer.css?v=2" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
</head>

<body>
    <header class="container-fluid">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-9 col-md-3" style="display: flex;align-items: center;">
                    <a href="index.php"><img src="images/logo.png" class="logo"></a>
                </div>
                <div class="menu-box col-3 col-md-9 d-flex align-items-center justify-content-end" id="collapsemenu">
                    <button onclick="$('.navigation').addClass('open');" style="background:transparent; font-size: 21px;" class="d-md-none main-btn-bk border-0 p-0 text-white"><i class="fas fa-bars"></i></button>
                    <nav class="navigation" id="navigationmenu">
                        <button class="d-md-none" onclick="$('.navigation').removeClass('open'); $('.sub-menu').slideUp().removeClass('active');
                    $('.has-drop').removeClass('active-a');" style="    position: absolute;right: 19px;border: 0;background: transparent;color: white;top: 14px;font-size: 16px;"><i class="fas fa-arrow-right"></i></button>
                        <ul>
                            <li class="mneu-a"><a href="javascript:void(0);">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="our-company.php">About Us</a></li>
                                    <li><a href="core-values.php">Core Value</a></li>
                                    <li><a href="our-stories.php">Our Stories</a></li>
                                    <li><a href="our-achievment.php">Achievements</a></li>
                                    <li><a href="our-community.php">Community</a></li>
                                </ul>
                            </li>
                            <li class="mneu-a"><a href="our-products.php">Product</a></li>
                            <li class="mneu-a"><a href="inquery.php">Coke Sathi</a></li>
                            <li class="mneu-a"><a href="career.php">Career</a></li>
                            <li class="mneu-a"><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script>
        $(document).ready(function() {
            if ($(window).scrollTop() >= 100) {
                $('header').addClass('fixed-header');

            } else {
                $('header').removeClass('fixed-header');
            }
        });

        $(window).scroll(function() {
            if ($(window).scrollTop() >= 100) {
                $('header').addClass('fixed-header');
            } else {
                $('header').removeClass('fixed-header');
            }
        });
    </script>