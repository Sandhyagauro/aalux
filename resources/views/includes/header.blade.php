<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aalux</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!--        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,400i,500,500i,600,700" rel="stylesheet"> 
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800,800i" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="assets/css/master.css" rel="stylesheet">
    </head>
    <body>
        <header>

            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <figure>
                                <img src="assets/images/aalux.png" alt="">
                            </figure>
                            <h4>Aalux Chauffeur Services</h4>
                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <div class="header-info">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="address clearfix">
                                            <figure class="info-figure">
                                                <img src="assets/images/address.png" alt="">
                                            </figure>
                                            <div class="header-info-des">
                                                <h6>Find Us On</h6>
                                                <p>26 Sandpiper House,UK</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="address clearfix">
                                            <figure class="info-figure">
                                                <img src="assets/images/phone.png" alt="">
                                            </figure>
                                            <div class="header-info-des">
                                                <h6>Call Us Today</h6>
                                                <p>(+44)-77-3480-0339</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="address clearfix">
                                            <figure class="info-figure">
                                                <img src="assets/images/mail.png" alt="">
                                            </figure>
                                            <div class="header-info-des">
                                                <h6>Mail Us At</h6>
                                                <p>uk@aalux.co.uk</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <div class="container">
                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand visible-sm visible-xs" href="index.php"><img src="assets/images/aalux.png"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav mr-auto">



                                <li <?php if ($nav == 1) echo 'class="active"' ?> class="nav-item">
                                    <a href="{{url('')}}">Home</a>
                                </li>
                                <li <?php if ($nav == 2) echo 'class="active"'; ?>  class="nav-item">
                                    <a href="about">About</a>
                                </li>
                                <li <?php if ($nav == 3) echo 'class="active"' ?>  class="dropdown">
                                    <a class="dropdown-toggle" href="services">Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services-inner.php">Airport Transfer</a></li>
                                        <li><a href="services-inner.php">Sea Port Transfer</a></li>
                                        <li><a href="services-inner.php">Students Transfer</a></li>
                                        <li><a href="services-inner.php">UK Tour's</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($nav == 4) echo 'class="active"'; ?>  class="nav-item">
                                    <a href="fleet">Fleets</a>
                                </li>
                                <li <?php if ($nav == 5) echo 'class="active"'; ?>  class="nav-item">
                                    <a href="reservation">Reservation</a>
                                </li>
                                <li <?php if ($nav == 6) echo 'class="active"'; ?>  class="nav-item">
                                    <a href="vacancies">Vacancies</a>
                                </li>
                                <li <?php if ($nav == 7) echo 'class="active"'; ?>  class="nav-item">
                                    <a href="blog">Blog</a>
                                </li>
                                <li <?php if ($nav == 8) echo 'class="active"'; ?>  class="dropdown">
                                    <a href="login">Login</a>
                                </li>
                            </ul>
                            <div class="header-account clearfix">
                                <ul class="list-inline pull-right">
                                    <li><a href="login.php" class="btn btn-default"><i class="fa fa-user"></i>Login</a></li>
                                    <li><a href="reservation.php" class="btn btn-default1">Get a Quote</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>