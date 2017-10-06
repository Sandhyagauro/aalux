<?php
$nav = 1;
//?>
@extends('includes.template')
@section('content')

<section class="banner">
    <div class="container">
        <h1 class="bungee"><span>corporate</span> chauffeur services</h1>
        <a href="tel:+4401895448503" class="btn btn-default">Call Us</a>
        <a href="#book" class="btn btn-default1">Book Now</a>
    </div>
</section>
<section class="about section-break">
    <div class="container">
        <div class="row">
            <div class="col-md-7 center">
                <h3 class="title"><span>About</span> Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus
                    et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                    pellentesque eu, pretium quis</p>
                <div class="logo"><img src="assets/images/aalux.png"></div>
                <h5>Danuta Zukauskiene</h5>
                <p>Chairman</p>
            </div>
            <div class="col-md-5">
                <div class="form" id="book">
                    <h3 class="title">Instant Quote</h3>
                    <form class="row no-gutter clearfix" action="{{url('quoteform')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control" placeholder="Pick up address" name="pickupaddress" required="">
                            <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                        </div>
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control" placeholder="Drop off address"
                                   name="dropoffaddress" required="">
                            <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                        </div>
                        <div class="input-group ad col-md-6">
                            <input type="text" class="form-control" placeholder="Date" name="date" required="">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                        <div class="input-group da col-md-6">
                            <input type="text" class="form-control" placeholder="Time" name="time" required="">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <button type="submit" class="btn btn-default" href="{{url('message')}}">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services section-break">
    <div class="container">
        <h3 class="title">Our <span>Services</span></h3>
        <div class="row no-gutter">
            <div class="col-md-3">
                <div class="serve1">
                    <div class="serve">
                        <div class="pic"><img src="assets/images/serve-1.jpg"></div>
                        <div class="serve-cont">
                            <h5 class="title2">Airport Transfer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="serve1">
                    <div class="serve">
                        <div class="pic"><img src="assets/images/serve-2.jpg"></div>
                        <div class="serve-cont">
                            <h5 class="title2">Driver Hire</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="serve1">
                    <div class="serve">
                        <div class="pic"><img src="assets/images/serve-3.jpg"></div>
                        <div class="serve-cont">
                            <h5 class="title2">VIP Transfer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="serve1">
                    <div class="serve">
                        <div class="pic"><img src="assets/images/serve-4.jpg"></div>
                        <div class="serve-cont">
                            <h5 class="title2">Students Transfer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="break section-break center">
    <h2>we provide the<br><span>luxurious fleets</span> for you</h2>
</section>
<section class="why section-break">
    <div class="container">
        <h3 class="title">Why <span>Choose</span> Us</h3>
        <div class="why-wrapper">
            <div class="circle-logo">
                <img src="assets/images/aalux-white.png">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="why-item">
                        <div class="row no-gutter">
                            <div class="col-md-8 right">
                                <div class="sub-title">
                                    <h5>Right On Time</h5>
                                </div>
                                <div class="why-cont">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.</p>
                                </div>
                            </div>
                            <div class="col-md-4 center">
                                <div class="why-img green">
                                    <img src="assets/images/time.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-item">
                        <div class="row no-gutter">
                            <div class="col-md-4 center">
                                <div class="why-img blue">
                                    <img src="assets/images/wallet.png">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="sub-title">
                                    <h5>at low cost</h5>
                                </div>
                                <div class="why-cont">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-item nomarg">
                        <div class="row no-gutter">
                            <div class="col-md-8 right">
                                <div class="sub-title">
                                    <h5>100% satisfaction</h5>
                                </div>
                                <div class="why-cont">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.</p>
                                </div>
                            </div>
                            <div class="col-md-4 center">
                                <div class="why-img blue">
                                    <img src="assets/images/like.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-item nomarg">
                        <div class="row no-gutter">
                            <div class="col-md-4 center">
                                <div class="why-img green">
                                    <img src="assets/images/driver.png">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="sub-title">
                                    <h5>reliable driver</h5>
                                </div>
                                <div class="why-cont">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials section-break center">
    <div t class="container">
        <h3 class="title">What <span>Client's Say</span></h3>
        <div class="testi">
            <div class="test">
                <p class="test-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut
                    labore incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exeullamcao laboris nisi</p>
                <div class="testi-info">
                    <figure>
                        <img src="assets/images/test1.jpg" alt="">
                    </figure>
                    <div class="testi-des">
                        <h5 class="title2">Annett A. Fitch</h5>
                        <p>97 Walden Road</p>
                    </div>
                </div>
            </div>
            <div class="test">
                <p class="test-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut
                    labore incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exeullamcao laboris nisi</p>
                <div class="testi-info">
                    <figure>
                        <img src="assets/images/test2.jpg" alt="">
                    </figure>
                    <div class="testi-des">
                        <h5 class="title2">Jamie Ross</h5>
                        <p>71 Old Chapel Road</p>
                    </div>
                </div>
            </div>
            <div class="test">
                <p class="test-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut
                    labore incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exeullamcao laboris nisi</p>
                <div class="testi-info">
                    <figure>
                        <img src="assets/images/test3.jpg" alt="">
                    </figure>
                    <div class="testi-des">
                        <h5 class="title2">Loretta R. Schwandt</h5>
                        <p>42 Cheriton Rd</p>
                    </div>
                </div>
            </div>
            <div class="test">
                <p class="test-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut
                    labore incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exeullamcao laboris nisi</p>
                <div class="testi-info">
                    <figure>
                        <img src="assets/images/gg.jpg" alt="">
                    </figure>
                    <div class="testi-des">
                        <h5 class="title2">Jamie Ross</h5>
                        <p>71 Old Chapel Road</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
