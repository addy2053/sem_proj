<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Banquette</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Optional theme -->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /*Header Adjustments CSS///////////////////*/
        .navbar-inverse {
            margin-bottom: 0px;

        }

        /*FOOTER START///////////////////*/
        .footer {
            padding: 40px 0 20px 0;
            background-color: #090c14;
            color: #878c94;
        }
        .footer .title{
            text-align: left;
            color:#fff;
            font-size:25px;
        }
        .footer .social-icon{
            padding:0px;
            margin:0px;
        }
        .footer .social-icon a{
            display:inline-block;
            color:#fff;
            font-size:25px;
            padding:5px;
        }
        .footer .payment{
            margin:0px;
            padding:0px;
            list-style-type:none
        }
        .footer .payment li{
            list-style-type:none
        }
        .footer .payment li a {
            text-decoration: none;
            display: inline-block;
            color: #fff;
            float: left;
            font-size: 25px;
            padding: 10px 10px;
        }


        /*Body CSS///////////////////*/
        .carousel-caption a {
            color: Black;
            font-family: "Droid Sans Mono Dotted", serif;
            height: 2%;
            width: 3%;
        }

        /*Content CSS///////////////////*/

        #back{
            padding-bottom: 5px;

            background-image: url(images/marriage.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }
        #birthback{
            padding-bottom: 5px;
            background-image: url(images/Birthday.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }
        #meetback{
            padding-bottom: 5px;
            background-image: url(images/office.jpg);

            background-repeat: no-repeat;
            background-size: cover;

        }
        #marriage{
            padding-top: 1%;

            background-color: red;
        }
        #birthday{
            padding-top: 1%;
            background-color: gold;

        }
        #meetings{
            padding-top: 1%;
            background-color: blue;

        }

        .col-sm-4{
            padding-left: 0%;
            padding-right: 0px;
            padding-bottom: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }
        .container-fluid{
            padding-left: 0%;
            padding-right: 0px;
            padding-bottom: 0px;
            margin-left: 0px;
            margin-bottom: 0px;
        }
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            height: auto;
            margin: auto;
        }
        #section
        {
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .navbar-inverse
        {
            border: solid indigo;
            border-bottom: solid black ;
            padding-top: 5px;
            background-color:indigo;
        }
        /*<--contactus css-->*/
        .content-header{
            font-family: 'Oleo Script', cursive;
            color:blue;
            font-size: 45px;
        }

        .section-content{
            text-align: center;

        }
        #contact{

            font-family: Calibri;
            font-size: large;
            padding-top: 60px;
            width: 100%
            height: 600px;
            background-image: url(images/contactback.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding-bottom: 20px;
        }
        .contact-section{
            padding-top: 40px;
        }
        .contact-section .col-md-6{
            width: 50%;
        }

        .form-line{
            border-right: 1px solid #B29999;
        }

        .form-group{
            margin-top: 10px;
        }
        label{
            font-size: 1.3em;
            line-height: 1em;
            font-weight: normal;
        }
        .form-control{
            font-size: 1.3em;
            color: #080808;
        }
        textarea.form-control {
            height: 135px;
            /* margin-top: px;*/
        }

        .submit{
            font-size: 1.1em;
            float: right;
            width: 110px;
            background-color: black;
            color: #fff;

        }

    </style>
</head>
<body>
<!--   Header================== -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Book Banquette</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Booking <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="onlinebooking">Online Booking</a></li>
                        <li><a href="halls">Marriage Halls</a></li>
                        <li><a href="BirthdayEventBooking">Birthday Events</a></li>
                        <li><a href="OfficeMeetings">Meeting Bookings</a></li>

                    </ul>
                </li>

                <li ><a  href="listing">Add Listing</a></li>
                <li><a href="contactus">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="signin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--   Body================== -->
<!--   Slider================== -->



    @yield("slider")


    @yield('section')


    @yield('colums')

  @yield('contactus')

<!--   FOOTER START================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h4 class="title">About us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
                <ul class="social-icon">
                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </ul>
            </div>

            <div class="col-sm-6">


            </div>
            <div class="col-sm-3">
                <h4 class="title">Payment</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="payment">
                    <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row text-center"><a href="http://lacodeid.com/" style="color: #fff;">Copyright © Book Banquette 2017</a></div>
    </div>
</footer>

</body>
<script>
    $(document).ready(function(){
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
            $("#myCarousel").carousel(2);
        });

        // Enable Carousel Controls
        $(".left").click(function(){
            $("#myCarousel").carousel("prev");
        });
        $(".right").click(function(){
            $("#myCarousel").carousel("next");
        });
    });
</script>
</html>