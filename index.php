<?php
session_start();

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['getEmail']) && $_POST['getEmail'] == true) {
    $userInputEmail = $_POST['email'];
    $userName = $_POST['name'];
    $userComments = $_POST['comments'];

    $mail = new PHPMailer(true);
    //Server settings
    // $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->IsSMTP();
    $mail->Host       = 'fitphilia.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = 'no-reply@fitphilia.com';                     // SMTP username
    $mail->Password   = 'Welcome@1';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = '587';                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@fitphilia.com');
    $mail->addAddress("yarolkar@gmail.com", 'Yash');     // Add a recipient

    $body =  "<p>Hello <b>$userName</b></p>" . "<p>Your username is <b>$userInputEmail</b></p>" . "<p>Your comments <b>$userComments</b></p>";


    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to FitWay';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    if (!$mail->send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'yes';
    }
    die;
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <link rel="icon" href="img/FitWay Circle.png" type="image/png">
    <title>thefitway.io</title>
    <!-- Meta Description -->
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Allerta Stencil" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <!-- rgb(20, 139, 193) -->
    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <style>
        .cap {
            top: 20%;
            margin-right: 20%;
        }

        .work {
            left: 10%;
        }

        .main_btn {
            padding: 0px 45px;
            background-image: -webkit-gradient(linear, left top, right top, from(#33a8ff), color-stop(51%, #54dad3), to(#33a8ff));
            background-image: -webkit-linear-gradient(left, #33a8ff 0%, #54dad3 51%, #33a8ff 100%);
            background-image: -o-linear-gradient(left, #33a8ff 0%, #54dad3 51%, #33a8ff 100%);
            background-image: linear-gradient(to right, #33a8ff 0%, #54dad3 51%, #33a8ff 100%);
            background-size: 200% auto;
            z-index: 2;
            display: inline-block;
            -webkit-transition: all 400ms linear;
            -o-transition: all 400ms linear;
            transition: all 400ms linear;
            text-align: center;
            color: #fff;
            font-size: 13px;
            font-weight: 1000;
            font-family: "Open Sans", sans-serif;
            line-height: 50px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px 0px rgba(115, 73, 251, 0.3);
        }

        .main_btn:hover {
            background-position: right center;
            color: #fff;
        }

        .hover_group:hover {
            opacity: 1;
            /* background-image: url("img/crm1.png"); */
        }

        #projectsvg {
            position: relative;
            width: 100%;
            padding-bottom: 60%;
            vertical-align: middle;
            margin: 0;
            overflow: hidden;
        }

        #projectsvg svg {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
        }

        .container {
            position: relative;
        }

        .column {
            float: left;
            width: 33.33%;
        }

        .overlay1 {
            position: absolute;
            bottom: 1px;
            left: 13%;
            right: 0;
            border-bottom-left-radius: 15px;
            background-color: rgb(0, 0, 0);
            opacity: 0.7;
            overflow: hidden;
            width: 100%;
            height: 18%;
            transition: .7s ease;
        }

        .overlay2 {
            position: absolute;
            bottom: 1px;
            left: 15px;
            right: 0;
            background-color: rgb(0, 0, 0);
            opacity: 0.7;
            overflow: hidden;
            width: 105%;
            height: 18%;
            transition: .7s ease;
        }

        .overlay3 {
            position: absolute;
            bottom: 1px;
            left: 22px;
            right: 0;
            background-color: rgb(0, 0, 0);
            opacity: 0.7;
            overflow: hidden;
            width: 84%;
            border-bottom-right-radius: 15px;
            height: 18%;
            transition: .7s ease;
        }

        .container:hover .overlay1 {
            height: 50%;
        }

        .container:hover .overlay2 {
            height: 50%;
        }

        .container:hover .overlay3 {
            height: 50%;
        }

        .container:hover .overlay_1 {
            height: 50%;
        }

        .container:hover .overlay_2 {
            height: 50%;
        }

        .container:hover .overlay_3 {
            height: 50%;
        }

        .overlay_1 {
            position: absolute;
            bottom: 46px;
            left: 4%;
            right: 0;
            background-color: rgb(0, 0, 0);
            opacity: 0.7;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            overflow: hidden;
            width: 321px;
            height: 18%;
            transition: .7s ease;
        }

        .overlay_2 {
            position: absolute;
            bottom: 46px;
            left: 4%;
            right: 0;
            background-color: rgb(0, 0, 0);
            opacity: 0.7;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            overflow: hidden;
            width: 321px;
            height: 18%;
            transition: .7s ease;
        }

        .overlay_3 {
            position: absolute;
            bottom: 46px;
            left: 4%;
            right: 0;
            background-color: rgb(0, 0, 0);
            opacity: 0.7;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            overflow: hidden;
            width: 321px;
            height: 18%;
            transition: .7s ease;
        }

        .text {
            position: absolute;
            color: whitesmoke;
            width: 200%;
            font-family: Josefin Sans;
            font-size: 15px;
            margin-top: 40px;
        }

        .imgs {
            position: absolute;
            height: 35%;
            width: 35%;
            transform: translate(30%, 30%);
        }

        .mobileimg {
            position: absolute;
            height: 20%;
            width: 40%;
            transform: translate(25%, 25%);
            margin-top: 2%;
        }

        .mobiletext {
            position: absolute;
            color: whitesmoke;
            width: 220%;
            font-family: Josefin Sans;
            font-size: 13px;
            margin-top: 25px;
        }

        @media screen and (max-width: 992px) {
            div.webView {
                display: none;
            }
        }

        @media screen and (min-width: 880px) {
            .mobileView {
                display: none;
            }
        }

        .carousel-inner {
            background-color: whitesmoke;
        }

        /* --------- THREE --------- */

        .three {
            list-style: none;
            padding: 0;
            margin: 100px 0;
        }

        .three>li {
            background: #FFFFFF;
            border: 1px solid rgba(150, 150, 150, 0.29);
            -moz-box-shadow: 0px 0px 18px 0px rgba(103, 85, 85, 0.39);
            box-shadow: 0px 0px 18px 0px rgba(103, 85, 85, 0.39);
            width: 250px;
            height: 430px;
            display: inline-block;
            margin: 0 20px;
            text-align: center;
        }

        .three>li img {
            margin-top: 60px;
        }

        .three>li:hover img {
            margin-top: 40px;
        }

        .three>li:hover {
            -moz-box-shadow: 0px 0px 5px 0px rgba(103, 85, 85, 0.25);
            box-shadow: 0px 0px 5px 0px rgba(103, 85, 85, 0.25);
        }

        .three>li:hover span {
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            bottom: -400px;
        }

        .three>li:hover h3 {
            color: rgba(255, 255, 255, 1);
            margin-top: 25px;
        }

        .three>li .wrapper {
            overflow: hidden;
            position: absolute;
            width: 250px;
            height: 430px;
        }

        .three>li span {
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            height: 500px;
            width: 500px;
            background: #3fc9ad;
            display: block;
            position: absolute;
            bottom: 150px;
            left: -125px;
        }

        .three>li span img {
            margin-top: 10px;
            width: 50px;
        }

        .three>li span:hover {
            background: rgb(74, 207, 167);
        }

        .three>li span i {
            position: absolute;
            bottom: -90px;
            color: rgb(107, 236, 208);
            text-transform: uppercase;
            border-radius: 50px;
            -moz-border-radius: 50px;
            -webkit-border-radius: 50px;
            border: 2px solid rgb(107, 236, 186);
            padding: 10px 30px;
            font-style: normal;
            display: inline-block;
            left: 195px;
        }

        .three>li span .mamber-img {
            width: 120px;
            margin-top: 170px;
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .three>li span .mamber-img+h3 {
            margin-top: 20px;
        }

        .three>li h3 {
            margin-top: 40px;
            color: rgba(255, 255, 255, 1);
        }

        .three>li h3 em {
            display: block;
            font-style: normal;
            text-transform: uppercase;
            font-weight: 300;
            font-size: 12px;
            margin-top: 5px;
        }

        .three .social {
            list-style: none;
            text-align: center;
            margin: 0;
            padding: 10px;
        }

        .three .social li {
            opacity: 0;
            display: inline-block;
            padding: 5px;
        }

        .three>li:hover .social li {
            opacity: 0.8;
        }

        .three .social li a {
            cursor: pointer;
            display: block;
        }

        .three .social li a:hover {
            opacity: 0.5;
        }

        .three .social li img {
            width: 24px;
        }

        .three .transition {
            transition: .7s cubic-bezier(.3, 0, 0, 1.3)
        }

        text.mobile {
            -ms-transform: skewY(-25deg);
            /* IE 9 */
            -webkit-transform: skewY(-25deg);
            /* Safari 3-8 */
            transform: skewY(-25deg);
        }

        text.tilt {
            -ms-transform: skewY(-28deg);
            /* IE 9 */
            -webkit-transform: skewY(-28deg);
            /* Safari 3-8 */
            transform: skewY(-28deg);
        }

        text.access {
            -ms-transform: skewY(25deg);
            /* IE 9 */
            -webkit-transform: skewY(25deg);
            /* Safari 3-8 */
            transform: skewY(25deg);
        }

        text.cardio {
            -ms-transform: skewY(28deg);
            /* IE 9 */
            -webkit-transform: skewY(28deg);
            /* Safari 3-8 */
            transform: skewY(28deg);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .visuallyhidden {
            position: absolute;
            z-index: -1;
            right: 0;
            opacity: 0;
        }

        .container1 {
            overflow: hidden;
            padding: 20px;
            margin-top: 2em;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body id="body">

    <!-- preloader -->
    <!-- <div id="preloader">
        <img src="img/run.gif" alt="Preloader">
    </div> -->
    <!-- <div id="preloader" style="width: 100%;height: 100%;margin-bottom: auto;margin-top: auto;">
        <div class="d-flex justify-content-center" style="width: 100%;height: 100%;margin-bottom: auto;margin-top: auto;justify-content: center;display: flex;">
        <img src="img/runn.gif" alt="Preloader" style="margin-bottom: auto;margin-top: auto;width:150px;height:auto;">
        </div>
    </div> -->
    <div id="preloader">
        <img src="img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

    <!-- 
        Fixed Navigation
        ==================================== -->
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <div class="webView">
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo" style="font-size: 110%;margin-top:10%">
                            <img src="img/FitWay Circle.png" height="30" width="30" style="margin-bottom:5%">&nbsp; FITWAY
                        </h1>
                    </a>
                </div>
                <div class="mobileView">
                    <a class="navbar-brand" href="#body">
                        <h1 id="logomobile" style="font-size: 110%;margin-top:14%">
                            <img src="img/FitWay Circle.png" height="30" width="30" style="margin-bottom:5%;">&nbsp; FITWAY
                        </h1>
                    </a>
                </div>

                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">HOME</a></li>
                    <li><a href="#why">WHY FITWAY</a></li>
                    <li><a href="#what">HOW WE SOLVE</a></li>
                    <li><a href="#works">OUR PRODUCTS</a></li>
                    <li><a href="#features">FEATURES</a></li>
                    <!-- <li><a href="#team">TEAM</a></li> -->
                    <!-- <li><a href="#features">About US</a></li> -->
                    <li><a href="#contact-form">CONTACT</a></li>
                    <!-- <li><a href="">GET THE APP</a></li> -->

                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
    <!--
        End Fixed Naslidervigation
        ==================================== -->



    <!--
        Home Slider
        ==================================== -->
    <div class="webView">
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- End Indicators bullet -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <!-- single slide -->
                    <div class="item active">
                        <img src="img/banner/Web Banners1.png" style="max-height:100%;width:100%">
                    </div>
                    <!-- end single slide -->

                    <!-- single slide -->
                    <div class="item">
                        <img src="img/banner/Web Banners2.png" style="max-height:100%;width:100%">
                    </div>
                    <div class="item">
                        <img src="img/banner/Web Banners3.png" style="max-height:100%;width:100%">
                    </div>
                    <!-- end single slide -->

                </div>
                <!-- End Wrapper for slides -->

            </div>
        </section>
    </div>


    <div class="container-fluid1 mobileView">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Indicators bullet -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol> -->
            <!-- End Indicators bullet -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <!-- single slide -->
                <div class="item active">
                    <img class="blo" src="img/WebBannerMobView1.png" style="max-height:100%;width:100%">
                </div>
                <!-- end single slide -->

                <!-- single slide -->
                <div class="item">
                    <img class="blo" src="http://thefitway.io/web/img/banner/WebBannerMobView3.png" style="max-height:100%;width:100%">
                </div>

                <div class="item">
                    <img class="blo" src="http://thefitway.io/web/img/banner/WebBannerMobView3.png" style="max-height:100%;width:100%">
                </div>
                <!-- end single slide -->

            </div>
            <!-- End Wrapper for slides -->

        </div>
    </div>

    <!--
        End Home SliderEnd
        ==================================== -->


    <section id="why" class="why">
        <div class="sec-title text-center wow bounceInDown" data-wow-duration="800ms">
            <div class="webView">
                <h2 style="margin-bottom:1%">Why FitWay</h2>
            </div>
            <div class="mobileView">
                <h2 style="margin-bottom:10%">Why FitWay</h2>
            </div>
        </div>
        <div class="container-fluid webView">
            <img src="img/why.png" width="100%" height="50%" style="padding-top:2%;padding-left:4%;padding-right:4%;">
        </div>
        <div class="mobileView">
            <img src="img/webnew/why mob.png" width="100%" height="100%" style="max-height:100%;width:100%">
        </div>
    </section>


    <!--
        Meet Our Team
        ==================================== -->

    <section id="what" class="what" style="background-color: #fff;">
        <div class="sec-title text-center wow bounceInDown" data-wow-duration="800ms">
            <div class="webView">
                <h2 style="margin-bottom:3%">How We Solve</h2>
            </div>
            <div class="mobileView">
                <h2 style="margin-bottom:2%">How We Solve</h2>
            </div>
        </div>
        <div class="container-fluid webView">
            <div class="container column">
                <img src="img/girl.jpg" width="450" height="600" style="border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;margin-left:10%;margin-top: 5%">
                <div class="overlay1">
                    <div class="imgs">
                        <img src="img/Track_Workouts.png" height="65" width="130">
                        <div class="text">FitWay ecosystem tracks workouts, monitors outdoor activities, measure body composition and helps every member progress in their fitness journey. It connects to fitness equipment and wearables to give you a detailed report of your
                            fitness & health performance.</div>
                    </div>
                </div>
            </div>
            <div class="container column">
                <img src="img/black.jpg" width="450" height="600" style="margin-top: 5%">
                <div class="overlay2">
                    <div class="imgs">
                        <img src="img/Gamify_Workouts.png" height="65" width="130">
                        <div class="text">FitWay creates enjoyable workout experiences by competing with friends and family members. Encourage competition and get your group members competing against themselves and each other. </div>
                    </div>
                </div>
            </div>
            <div class="container column">
                <img src="img/hair.jpg" width="450" height="600" style="width:90%; margin-top: 5%;margin-left: 2%;  border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;">
                <div class="overlay3">
                    <div class="imgs">
                        <img src="img/Rewarding_Workouts.png" height="65" width="170">
                        <div class="text">Evaluate members progress and rankings. Motivate members to out-perform each other and winner gets the reward for every calorie that they burn and redeem them to purchase products at FitWay store.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid  mobileView">
            <div id="apps" class="container-fluid" style="padding-top:50px;">
                <div class="row">
                    <div class="row content">

                        <div id="Carousel" class="carousel slide" data-ride="">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active" style="background-color:rgb(32, 30, 30)">
                                    <div class="col-sm-12" style="height:15%">
                                        <img src="img/webnew/Track.png" class="center" style="padding-top:10px;height: auto%;width: 40%;">
                                    </div>
                                    <div class="col-sm-12" style="height:55%">
                                        <img src="img/girl.jpg" class="center" style="width:70%;height=auto%;border-top-left-radius: 15px;
                                        border-bottom-left-radius: 15px;border-top-right-radius: 15px;
                                        border-bottom-right-radius: 15px;margin-top: 5%;max-height:90%">
                                    </div>
                                    <div class="col-sm-12" style="height:30%">
                                        <p style="color:#fff;font-family: Josefin Sans;font-size: 15px;text-align: center;padding-bottom:20px;">
                                            FitWay ecosystem tracks workouts, monitors outdoor activities, measure body composition and helps every member progress in their fitness journey. It connects to fitness equipment and wearables to give you a detailed report of your fitness & health performance.
                                        </p>
                                    </div>
                                </div>

                                <div class="item" style="background-color:rgb(19, 110, 162)">
                                    <div class="col-sm-12" style="height:15%">
                                        <img src="img/webnew/Gamify_Workouts.png" class="center" style="padding-top:10px;height: auto;width: 45%;">
                                    </div>
                                    <div class="col-sm-12" style="height:55%">
                                        <img src="img/black.jpg" class="center" style="width:80%;height:auto%;border-top-left-radius: 15px;
                                                 border-bottom-left-radius: 15px;border-top-right-radius: 15px;
                                                 border-bottom-right-radius: 15px;;margin-top: 5%;max-height:90%">
                                    </div>
                                    <div class="col-sm-12" style="height:30%">
                                        <br>
                                        <p style="color:#fff;font-family: Josefin Sans;font-size: 15px;text-align: center;padding-bottom:50px;">
                                            FitWay creates enjoyable workout experiences by competing with friends and family members. Encourage competition and get your group members competing against themselves and each other.</p>
                                    </div>
                                </div>

                                <div class="item" style="background-color:rgb(221, 53, 53)">
                                    <div class="col-sm-12" style="height:15%">
                                        <img src="img/webnew/Rewarding_Workouts.png" class="center" style="padding-top:10px;height: auto;width: 40%;">
                                    </div>
                                    <div class="col-sm-12" style="height:55%">
                                        <img src="img/hair.jpg" class="center" style="width:80%;height:380px;border-top-left-radius: 15px;
                                        border-bottom-left-radius: 15px;border-top-right-radius: 15px;
                                        border-bottom-right-radius: 15px;margin-top: 5%;max-height:90%">
                                    </div>
                                    <div class="col-sm-12" style="height:30%">
                                        <br>
                                        <p style="color:#fff;font-family: Josefin Sans;font-size: 15px;text-align: center;padding-bottom:50px;">
                                            Evaluate members progress and rankings. Motivate members to out-perform each other and winner gets the reward for every calorie that they burn and redeem them to purchase products at FitWay store.</p>
                                    </div>
                                </div>

                                <a class="left carousel-control mobileView" style="width:5%;" href="#Carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control mobileView" style="width:5%;" href="#Carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        End Meet Our Team
        ==================================== -->
    <!--
        Our Works
        ==================================== -->
    <section id="works" class="works clearfix">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center wow bounceInDown animated">
                    <h2 style="margin-bottom:4%">Our Products</h2>
                </div>

                <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                    <ul class="text-center">
                        <li><a href="javascript:;" id="all" data-filter="all" class="active filter">All</a></li>
                        <li><a href="javascript:;" id="customer" data-filter=".customer" class="active filter">Customer App</a></li>
                        <li><a href="javascript:;" id="trainer" data-filter=".trainer" class="filter">Trainer App</a></li>
                        <li><a href="javascript:;" id="erp" data-filter=".erp" class="filter">ERP App</a></li>
                        <li><a href="javascript:;" id="crm" data-filter=".crm" class="filter">CRM</a></li>
                        <li><a href="javascript:;" id="wear" data-filter=".wear" class="filter">Wearables</a></li>
                        <li><a href="javascript:;" id="spin" data-filter=".spin" class="filter">Group Classes</a></li>
                        <li><a href="javascript:;" id="door" data-filter=".door" class="filter">Access Control</a></li>
                        <li><a href="javascript:;" id="smartscale" data-filter=".smartscale" class="filter">Smart Scale</a></li>
                        <li><a href="javascript:;" id="smartmirror" data-filter=".smartmirror" class="filter">Smart Mirror</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="project-wrapper">
            <figure class="mix work-item customer" style="width:100%">
                <!-- <img src="img/works/item-1.jpg" alt=""> -->
                <div id="customer_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/coustmerapp.png" height="450px" width="280px">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">FITWAY APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay ecosystem tracks workouts,monitors outdoor activities,measure body composition and helps every member progressin their fitness journey.It connects to fitness equipment and wearables to give you a detailed report of your
                                fitness & health performance.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/coustmerapp.png" height="auto" width="auto">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">FITWAY APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay ecosystem tracks workouts,monitors outdoor activities,measure body composition and helps every member progressin their fitness journey.It connects to fitness equipment and wearables to give you a detailed report of your
                                fitness & health performance.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item trainer" style="width:100%">
                <div id="trainer_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/trainerapp.png" height="450px" width="280px">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">TRAINER APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay ecosystem tracks workouts,monitors outdoor activities,measure body composition and helps every member progressin their fitness journey.It connects to fitness equipment and wearables to give you a detailed report of your
                                fitness & health performance.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/trainerapp.png" height="auto" width="auto">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">TRAINER APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay ecosystem tracks workouts,monitors outdoor activities,measure body composition and helps every member progressin their fitness journey.It connects to fitness equipment and wearables to give you a detailed report of your
                                fitness & health performance.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item crm" style="width:100%">
                <div id="crm_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/crm.png" height="450px" width="280px">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">CRM APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">With our advanced analytics and reporting, you can increase your gym's retention rate and keep your members focused on their fitness performance. We deliver fresh insights on how many gym members may be expected to leave your fitness club at any given time. This data is based on club member actions taken, their preferences, and how similar members behave.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/crm.png" height="auto" width="auto">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">CRM APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">With our advanced analytics and reporting, you can increase your gym's retention rate and keep your members focused on their fitness performance. We deliver fresh insights on how many gym members may be expected to leave your fitness club at any given time. This data is based on club member actions taken, their preferences, and how similar members behave.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item spin" style="width:100%">
                <div id="spin_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/spin.png" height="300px" width="450px" style="margin-top:2%;">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">SPIN APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay Spin provides fitness studios the ability to monitor heart rate for group batch members together and make the sessions more fun and engaging. You can help them train more effectively by keeping them in the right heart rate zone. It makes members aware of their fitness levels in real time. FitWay Spin generates real-time calorie scores. It’s easy and simple.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/spin.png" height="auto" width="100%">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">SPIN APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay Spin provides fitness studios the ability to monitor heart rate for group batch members together and make the sessions more fun and engaging. You can help them train more effectively by keeping them in the right heart rate zone. It makes members aware of their fitness levels in real time. FitWay Spin generates real-time calorie scores. It’s easy and simple.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item erp" style="width:100%">
                <div id="erp_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6">
                            <img src="img/lap.png" style="margin-left:10%;">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">ERP APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay ecosystem tracks workouts,monitors outdoor activities,measure body composition and helps every member progressin their fitness journey.It connects to fitness equipment and wearables to give you a detailed report of your
                                fitness & health performance.
                            </h5>
                            <br><a href="https://thefitway.io/test_erp/fitway_erp/fiterp.html" target="_blank"><button type="button" class="main_btn">Learn More</button></a>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/lap.png" height="auto" width="100%">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">ERP APP</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay ecosystem tracks workouts,monitors outdoor activities,measure body composition and helps every member progressin their fitness journey.It connects to fitness equipment and wearables to give you a detailed report of your
                                fitness & health performance.
                            </h5>
                            <br><a href="https://thefitway.io/test_erp/fitway_erp/fiterp.html"><button type="button" class="main_btn">Learn More</button></a>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item door" style="width:100%">
                <div id="door_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/accesscontrol.png" height="50%" width="70%" style="padding-top:10%;">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">ACCESS CONTROL</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay uses facial recognition technology to shorten the visitor check-in process at your premises and ensure that unwanted people are blocked. Empower your lobby/reception staff and the security staff to welcome visitors warmly, quickly and efficiently.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/accesscontrol.png" height="50%" width="100%">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">ACCESS CONTROL</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay uses facial recognition technology to shorten the visitor check-in process at your premises and ensure that unwanted people are blocked. Empower your lobby/reception staff and the security staff to welcome visitors warmly, quickly and efficiently.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item smartscale" style="width:100%">
                <div id="smart_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/smartscale.png" height="450px" width="450px">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">SMART SCALE</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">Smart Scale track health vitals and progress over time, as you change your workout and diet habits. With all data at fingertips, compare results over days, weeks and even months to analyze minute details and see actual progress.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/smartscale.png" height="auto" width="100%">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">SMART SCALE</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">Smart Scale track health vitals and progress over time, as you change your workout and diet habits. With all data at fingertips, compare results over days, weeks and even months to analyze minute details and see actual progress.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item wear" style="width:100%">
                <div id="wear_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/wareables.png" height="30%" width="40%">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">WEARABLES</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">Use 24/7 heart rate to better track calorie burn, optimize workouts and uncover health trends. Use real-time heart rate zones to see whether you’re in the Fat Burn, Cardio or Peak zone and use what you learn to know the impact of your workouts.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/wareables.png" height="auto" width="100%">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">WEARABLES</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">Use 24/7 heart rate to better track calorie burn, optimize workouts and uncover health trends. Use real-time heart rate zones to see whether you’re in the Fat Burn, Cardio or Peak zone and use what you learn to know the impact of your workouts.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure class="mix work-item smartmirror" style="width:100%">
                <div id="mirror_show" class="hiddenDetail">
                    <div class="webView">
                        <div class="col-lg-6 work">
                            <img src="img/mirror.png" height="450px" width="280px">
                        </div>
                        <div class="col-lg-6 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">SMART MIRROR</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay monitors heart rate, calories and duration of your workout and shows you the insights on mirror. You just have to stand in front of the mirror you'll see much more than just your reflection. Work out with friends and track your progress.
                                When off, it's a full-length mirror.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                    <div class="mobileView">
                        <div class="col-xs-12">
                            <img src="img/mirror.png" height="auto" width="100%">
                        </div>
                        <div class="col-xs-12 text-center">
                            <br><br><br><br>
                            <h2 style="color:black;font-family:Allerta Stencil">SMART MIRROR</h2>
                            <br>
                            <h5 style="color:black;line-height: 1.5">FitWay monitors heart rate, calories and duration of your workout and shows you the insights on mirror. You just have to stand in front of the mirror you'll see much more than just your reflection. Work out with friends and track your progress.
                                When off, it's a full-length mirror.
                            </h5>
                            <br> <button type="button" class="main_btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </figure>

            <figure id="projectsvg" class="mix work-item all" style="width:100%">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080" preserveAspectRatio="xMinYMin meet">
                    <!-- set your background image -->
                    <image width="1920" height="1080" xlink:href="img/eco.svg" />
                    <g class="hover_group" opacity="0">
                        <a target="_blank" href="https://thefitway.io/crm/login.php">
                            <text x="199" y="706.9" font-size="20" font-family="Allerta Stencil">CRM</text>
                            <rect x="137" y="850.1" opacity="0.01" fill="#FFFFFF" width="150" height="150">
                            </rect>
                            <circle cx="220" cy="750" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a href="#works">
                            <text class="access" x="512" y="296.9" font-size="20" font-family="Allerta Stencil">ACCESS CONTROL</text>
                            <rect x="480" y="654.1" opacity="0.01" fill="#FFFFFF" width="150" height="150"></rect>
                            <circle cx="580" cy="600" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.fitphilia.fitway.customer">
                            <text class="tilt" x="670" y="1106.9" font-size="20" font-family="Allerta Stencil">MOBILE APPS</text>
                            <rect x="730" y="820.1" opacity="0.01" fill="#FFFFFF" width="150" height="150"></rect>
                            <circle cx="750" cy="750" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a href="#works">
                            <circle cx="1240" cy="610" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                            <text class="cardio" x="1180.7" y="-80" font-size="20" font-family="Allerta Stencil">CARDIO SENSOR</text>
                            <rect x="1081.7" y="637" opacity="0.01" fill="#FFFFFF" width="150.2" height="150.8"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a href="#works">
                            <circle cx="760" cy="440" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                            <text class="mobile" x="690.7" y="759" font-size="20" font-family="Allerta Stencil">STRENGTH</text>
                            <rect x="771.7" y="437" opacity="0.01" fill="#FFFFFF" width="150.2" height="150.8"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a target="_blank" href="https://fitphilia.com/release/testing/fitway_spin/">
                            <circle cx="1020" cy="185" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                            <text x="950.7" y="156" font-size="20" font-family="Allerta Stencil">GROUP CLASSES</text>
                            <rect x="1051.7" y="287" opacity="0.01" fill="#FFFFFF" width="150.2" height="150.8"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a href="#works">
                            <circle cx="1460" cy="120" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                            <text class="cardio" x="1410.7" y="-690" font-size="20" font-family="Allerta Stencil">SMART SCALE</text>
                            <rect x="1301.7" y="87" opacity="0.01" fill="#FFFFFF" width="150.2" height="150.8"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a href="#works">
                            <circle cx="1753" cy="85" r="20" stroke="lightblue" stroke-width="3" fill="lightblue"></circle>
                            <text x="1680.7" y="60" font-size="20" font-family="Allerta Stencil">SMART MIRROR</text>
                            <rect x="1601.7" y="137" opacity="0.01" fill="#FFFFFF" width="150.2" height="200.8"></rect>
                        </a>
                    </g>
                </svg>
            </figure>

        </div>
    </section>
    <!--
        End Our Works
        ==================================== -->

    <!--
        Features
        ==================================== -->

    <section id="features" class="features">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="800ms">
                    <h2>FEATURES</h2><br>
                    <h4> Fitness is going mobile. And we deliver an amazing experience to your members to help them <b>make fitness a habit. </b></h5>
                </div>

                <!-- service item -->
                <div class="col-md-3 wow fadeInUp" data-wow-duration="800ms" data-wow-delay="800ms">
                    <div class="service-item zoom">
                        <div class="service-icon">
                            <img src="img/medical-app.png" width="40px">
                        </div>

                        <div class="service-desc">
                            <h3>Track Workouts
                            </h3>
                            <p>FitWay tracks all day activity in real-time data about your heart-rate, steps, calories burned and sleep
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->



                <!-- service item -->
                <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">
                    <div class="service-item zoom">
                        <div class="service-icon">
                            <img src="img/analyze.png" width="40px">
                        </div>

                        <div class="service-desc">
                            <h3>Analyse Body Metrics
                            </h3>
                            <p>Measure 15 body parameters such as Muscle Mass, Fat , Bone Mass, Protein, Water , etc
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

                <!-- service item -->
                <div class="col-md-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item zoom">
                        <div class="service-icon">
                            <img src="img/trophy.png" width="40px">
                        </div>

                        <div class="service-desc">
                            <h3>Earn Rewards
                            </h3>
                            <p>Earn Rewards for every calorie that you burn and Redeem them to purchase products at our store
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->


                <!-- service item -->
                <div class="col-md-3 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="service-item zoom">
                        <div class="service-icon">
                            <!-- <i class="fa fa-gamepad fa-2x"></i> -->
                            <img src="img/game-controller.png" width="40px">
                        </div>

                        <div class="service-desc">
                            <h3>Gamify Sessions
                            </h3>
                            <p>With FitWay enjoy your workouts and create experiences by competing with friends and family members
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end service item -->

            </div>
        </div>
    </section>

    <!--
            End Features
            ==================================== -->


    <!--
        Contact Us
        ==================================== -->

    <section id="contact" class="contact" style="background-color: #000;">
        <div class="container">
            <div class="row mb50">

                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2 style="color:white;">Let’s Discuss</h2>
                    <!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
                </div>

                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                </div>

                <!-- contact address -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3 style="color:white;">If you have a question</h3>
                        <p style="color:white;">A-201, Business Square,</p>
                        <p style="color:white;">Andheri East, Mumbai - 93.</p>
                        <p style="color:white;"><span class="glyphicon glyphicon-phone"></span> (+91) 9082-198-811</p>
                    </div>
                </div>
                <!-- end contact address -->

                <!-- contact form -->
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="contact-form">
                        <h3 style="color:white;">Say hello!</h3>
                        <form action="#" id="contact-form">
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                </div>
                                <div class="input-field">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="comments" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-default pull-right" type="submit" id="sendMail">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end contact form -->

                <!-- footer social links -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <ul class="footer-social">
                        <li><a target="_blank" href="https://www.facebook.com/fitphilia"><i class="fa fa-facebook fa-2x"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/thefitwayio"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a target="_blank" href="https://in.linkedin.com/company/fitphilia-solutions-private-limited"><i class="fa fa-linkedin fa-2x"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UC3jptCwxvsKMGtJYS-0LeTg"><i class="fa fa-youtube fa-2x"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/fitphilia"><i class="fa fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- end footer social links -->

            </div>
        </div>

    </section>

    <!--
        End Contact Us
        ==================================== -->


    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
		================================================== -->
    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $(".hiddenDetail").hide();
            $('#sendMail').prop('disabled', true);
        });

        $("#customer").click(function() {
            $("#customer_show").show();
        });
        $("#trainer").click(function() {
            $("#trainer_show").show();
        });
        $("#crm").click(function() {
            $("#crm_show").show();
        });
        $("#erp").click(function() {
            $("#erp_show").show();
        });
        $("#spin").click(function() {
            $("#spin_show").show();
        });
        $("#wear").click(function() {
            $("#wear_show").show();
        });
        $("#door").click(function() {
            $("#door_show").show();
        });
        $("#smartscale").click(function() {
            $("#smart_show").show();
        });
        $("#smartmirror").click(function() {
            $("#mirror_show").show();
        });
        $("#all").click(function() {
            $(".hiddenDetail").hide();
        });
    </script>
    <script>
        const cardsContainer = document.querySelector(".card-carousel");
        const cardsController = document.querySelector(".card-carousel + .card-controller")

        class DraggingEvent {
            constructor(target = undefined) {
                this.target = target;
            }

            event(callback) {
                let handler;

                this.target.addEventListener("mousedown", e => {
                    e.preventDefault()

                    handler = callback(e)

                    window.addEventListener("mousemove", handler)

                    document.addEventListener("mouseleave", clearDraggingEvent)

                    window.addEventListener("mouseup", clearDraggingEvent)

                    function clearDraggingEvent() {
                        window.removeEventListener("mousemove", handler)
                        window.removeEventListener("mouseup", clearDraggingEvent)

                        document.removeEventListener("mouseleave", clearDraggingEvent)

                        handler(null)
                    }
                })

                this.target.addEventListener("touchstart", e => {
                    handler = callback(e)

                    window.addEventListener("touchmove", handler)

                    window.addEventListener("touchend", clearDraggingEvent)

                    document.body.addEventListener("mouseleave", clearDraggingEvent)

                    function clearDraggingEvent() {
                        window.removeEventListener("touchmove", handler)
                        window.removeEventListener("touchend", clearDraggingEvent)

                        handler(null)
                    }
                })
            }

            // Get the distance that the user has dragged
            getDistance(callback) {
                function distanceInit(e1) {
                    let startingX, startingY;

                    if ("touches" in e1) {
                        startingX = e1.touches[0].clientX
                        startingY = e1.touches[0].clientY
                    } else {
                        startingX = e1.clientX
                        startingY = e1.clientY
                    }


                    return function(e2) {
                        if (e2 === null) {
                            return callback(null)
                        } else {

                            if ("touches" in e2) {
                                return callback({
                                    x: e2.touches[0].clientX - startingX,
                                    y: e2.touches[0].clientY - startingY
                                })
                            } else {
                                return callback({
                                    x: e2.clientX - startingX,
                                    y: e2.clientY - startingY
                                })
                            }
                        }
                    }
                }

                this.event(distanceInit)
            }
        }


        class CardCarousel extends DraggingEvent {
            constructor(container, controller = undefined) {
                super(container)

                // DOM elements
                this.container = container
                this.controllerElement = controller
                this.cards = container.querySelectorAll(".card")

                // Carousel data
                this.centerIndex = (this.cards.length - 1) / 2;
                this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100
                this.xScale = {};

                // Resizing
                window.addEventListener("resize", this.updateCardWidth.bind(this))

                if (this.controllerElement) {
                    this.controllerElement.addEventListener("keydown", this.controller.bind(this))
                }


                // Initializers
                this.build()

                // Bind dragging event
                super.getDistance(this.moveCards.bind(this))
            }

            updateCardWidth() {
                this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100

                this.build()
            }

            build(fix = 0) {
                for (let i = 0; i < this.cards.length; i++) {
                    const x = i - this.centerIndex;
                    const scale = this.calcScale(x)
                    const scale2 = this.calcScale2(x)
                    const zIndex = -(Math.abs(i - this.centerIndex))

                    const leftPos = this.calcPos(x, scale2)


                    this.xScale[x] = this.cards[i]

                    this.updateCards(this.cards[i], {
                        x: x,
                        scale: scale,
                        leftPos: leftPos,
                        zIndex: zIndex
                    })
                }
            }


            controller(e) {
                const temp = {
                    ...this.xScale
                };

                if (e.keyCode === 39) {
                    // Left arrow
                    for (let x in this.xScale) {
                        const newX = (parseInt(x) - 1 < -this.centerIndex) ? this.centerIndex : parseInt(x) - 1;

                        temp[newX] = this.xScale[x]
                    }
                }

                if (e.keyCode == 37) {
                    // Right arrow
                    for (let x in this.xScale) {
                        const newX = (parseInt(x) + 1 > this.centerIndex) ? -this.centerIndex : parseInt(x) + 1;

                        temp[newX] = this.xScale[x]
                    }
                }

                this.xScale = temp;

                for (let x in temp) {
                    const scale = this.calcScale(x),
                        scale2 = this.calcScale2(x),
                        leftPos = this.calcPos(x, scale2),
                        zIndex = -Math.abs(x)

                    this.updateCards(this.xScale[x], {
                        x: x,
                        scale: scale,
                        leftPos: leftPos,
                        zIndex: zIndex
                    })
                }
            }

            calcPos(x, scale) {
                let formula;

                if (x < 0) {
                    formula = (scale * 100 - this.cardWidth) / 2

                    return formula

                } else if (x > 0) {
                    formula = 100 - (scale * 100 + this.cardWidth) / 2

                    return formula
                } else {
                    formula = 100 - (scale * 100 + this.cardWidth) / 2

                    return formula
                }
            }

            updateCards(card, data) {
                if (data.x || data.x == 0) {
                    card.setAttribute("data-x", data.x)
                }

                if (data.scale || data.scale == 0) {
                    card.style.transform = `scale(${data.scale})`

                    if (data.scale == 0) {
                        card.style.opacity = data.scale
                    } else {
                        card.style.opacity = 1;
                    }
                }

                if (data.leftPos) {
                    card.style.left = `${data.leftPos}%`
                }

                if (data.zIndex || data.zIndex == 0) {
                    if (data.zIndex == 0) {
                        card.classList.add("highlight")
                    } else {
                        card.classList.remove("highlight")
                    }

                    card.style.zIndex = data.zIndex
                }
            }

            calcScale2(x) {
                let formula;

                if (x <= 0) {
                    formula = 1 - -1 / 5 * x

                    return formula
                } else if (x > 0) {
                    formula = 1 - 1 / 5 * x

                    return formula
                }
            }

            calcScale(x) {
                const formula = 1 - 1 / 5 * Math.pow(x, 2)

                if (formula <= 0) {
                    return 0
                } else {
                    return formula
                }
            }

            checkOrdering(card, x, xDist) {
                const original = parseInt(card.dataset.x)
                const rounded = Math.round(xDist)
                let newX = x

                if (x !== x + rounded) {
                    if (x + rounded > original) {
                        if (x + rounded > this.centerIndex) {

                            newX = ((x + rounded - 1) - this.centerIndex) - rounded + -this.centerIndex
                        }
                    } else if (x + rounded < original) {
                        if (x + rounded < -this.centerIndex) {

                            newX = ((x + rounded + 1) + this.centerIndex) - rounded + this.centerIndex
                        }
                    }

                    this.xScale[newX + rounded] = card;
                }

                const temp = -Math.abs(newX + rounded)

                this.updateCards(card, {
                    zIndex: temp
                })

                return newX;
            }

            moveCards(data) {
                let xDist;

                if (data != null) {
                    this.container.classList.remove("smooth-return")
                    xDist = data.x / 250;
                } else {


                    this.container.classList.add("smooth-return")
                    xDist = 0;

                    for (let x in this.xScale) {
                        this.updateCards(this.xScale[x], {
                            x: x,
                            zIndex: Math.abs(Math.abs(x) - this.centerIndex)
                        })
                    }
                }

                for (let i = 0; i < this.cards.length; i++) {
                    const x = this.checkOrdering(this.cards[i], parseInt(this.cards[i].dataset.x), xDist),
                        scale = this.calcScale(x + xDist),
                        scale2 = this.calcScale2(x + xDist),
                        leftPos = this.calcPos(x + xDist, scale2)


                    this.updateCards(this.cards[i], {
                        scale: scale,
                        leftPos: leftPos
                    })
                }
            }
        }

        const carousel = new CardCarousel(cardsContainer)
    </script>
    <script>
        $('#email, #name').on('change blur input keyup', function() {
            if ($('#email').val() != '' && $('#name').val() != '') {
                $('#sendMail').prop('disabled', false);
            } else {
                $('#sendMail').prop('disabled', true);
            }
        });
    </script>

    <script>
        $('#sendMail').click(function() {
            var email = $('#email').val();
            var name = $('#name').val();
            var comments = $('#comments').val();
            // alert(email);
            var datapass = "getEmail=true&email=" + email + "&name=" + name + "&comments=" + comments;
            $.ajax({
                type: 'POST',
                data: datapass,
                url: 'index.php',
                success: function(responseText) {
                    console.log(responseText);
                    try {
                        if (responseText == 'yes') {
                            alert("Mail sent");
                            $('#email').val('');
                            $('#name').val('');
                            $('#comments').val('');
                        };
                    } catch (err) {
                        alert('Something went wrong. Please contact developer!');
                    }
                }

            });
        });
    </script>
</body>

</html>