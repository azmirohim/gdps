<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Garuda Daya Pratama Sejahtera</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/logo-white.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>


</head>

<body>

        <div class="preloader d-flex align-items-center justify-content-center" style="background-color:#003679; opacity:0.9;">
                <center><br><br><br>
                <div class="loader" id="loader" ></div>
                <div class="loader" id="loader2"></div>
                <div class="loader" id="loader3"></div>
                <div class="loader" id="loader4"></div>
                <span id="text"><img src="{{asset('img/logo-white.png')}}"></span><br>
            </div>


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="{{route('index')}}"><img src="{{asset('img/gdps_logo.png')}}" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Cikokol, Jl. Jenderal Sudirman No.1, Babakan, Kota Tangerang "><img src="img/core-img/placeholder.png" alt=""> <span>Tangcity Business Park Blok F No. 32</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@garudapratama.com"><img src="img/core-img/message.png" alt=""> <span>marketing@garudapratama.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">


                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                            <!-- Logo Area -->
                                <!-- <div class="logo">
                                    <a href="{{route('index')}}"><img src="{{asset('img/gdps_logo.png')}}" alt=""></a>
                                </div> -->
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('service')}}">Services</a></li>
                                    <li><a href="{{route('vacancy')}}">Career</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/patner.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp; Your Prime Partners</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
