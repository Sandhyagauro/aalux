
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
                                                <p><a href="tel:(+44)-77-3480-0339"> (+44)-77-3480-0339</a></p>
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
                                                <p><a href="mailto:uk@aalux.co.uk"> uk@aalux.co.uk</a></p>
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
                            <a class="navbar-brand visible-sm visible-xs" href="index"><img src="assets/images/aalux.png"></a>
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
                                        <li><a href="services-inner">Airport Transfer</a></li>
                                        <li><a href="services-inner">Sea Port Transfer</a></li>
                                        <li><a href="services-inner">Students Transfer</a></li>
                                        <li><a href="services-inner">UK Tour's</a></li>
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
                                    {{--<li><a href="login" class="btn btn-default"><i class="fa fa-user"></i>Login</a></li>--}}
                                    <li><a href="reservation" class="btn btn-default1">Get a Quote</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>