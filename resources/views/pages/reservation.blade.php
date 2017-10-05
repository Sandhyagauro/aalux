<?php

$nav = 5;
?>
@extends('includes.template')
@section('content')
<section class="innerbanner reservation-banner">
    <div class="banner-info">
        <h1>Reserve A Car</h1>
        <h5><a href="index.blade.php">Home</a> / Reservation</h5>
    </div>
</section>
<section class="reservation-page section-break">
    <div class="container">
        <div class="reservation">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="reservation-form">
                        <form class="form-horizontal" action="{{url('reservationform')}}" method="post">

                            <div class="form-wrapper personal-details">
                                <legend class="title">Personal Details</legend>
                                <fieldset>                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">Name</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="Full Name" name="fullname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Phone No.</label>                                    
                                                <div class="col-sm-8">                                       
                                                    <input  type="text" class="form-control" placeholder="Phone/Mobile Number" name="phonenumber">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Email</label>  
                                                <div class="col-sm-8">                                
                                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Passengers</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" >
                                                        <option  name="passengers">1</option>
                                                        <option  name="passengers">2</option>
                                                        <option  name="passengers">3</option>
                                                        <option  name="passengers">4</option>
                                                        <option  name="passengers">5</option>
                                                        <option  name="passengers">6</option>
                                                        <option  name="passengers">7</option>
                                                        <option  name="passengers">8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="title2 col-sm-4">Luggage</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control">
                                                        <option  name="luggage">1</option>
                                                        <option  name="luggage">2</option>
                                                        <option  name="luggage">3</option>
                                                        <option  name="luggage">4</option>
                                                        <option  name="luggage">5</option>
                                                        <option  name="luggage">6</option>
                                                        <option  name="luggage">7</option>
                                                        <option  name="luggage">8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Child Seats</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control" >
                                                        <option name="child_seats">0</option>
                                                        <option name="child_seats">1</option>
                                                        <option name="child_seats">2</option>
                                                        <option name="child_seats">3</option>
                                                        <option name="child_seats">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-wrapper personal-details">
                                <legend>Journey Details</legend>
                                <fieldset>                               
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Pick up Address</label>
                                                <div class="col-sm-8">                                      
                                                    <input type="text" class="form-control" placeholder="Pick up Address" name="pickupaddress">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Date</label>                                    
                                                <div class="col-sm-8">                                      
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="(dd/mm/yyyy)" name="date">
                                                        <label class="input-group-addon"><i class="fa fa-calendar"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Vehicle Type</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control" >
                                                        <option value="2" name="vehicletype">Business Class</option>
                                                        <option value="4" name="vehicletype" >VIP Class</option>
                                                        <option value="5" name="vehicletype">Range Rover</option>
                                                        <option value="6" name="vehicletype">MPV</option>
                                                        <option value="7" name="vehicletype" >Minibuses</option>
                                                        <option value="8" name="vehicletype" >First Class</option>
                                                        <option value="9" name="vehicletype" >Rolls Royce Phantom</option>
                                                        <option value="10" name="vehicletype">Mercedes S Class</option>
                                                        <option value="11" name="vehicletype">Bentley</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Drop off Address</label>                                    
                                                <div class="col-sm-8">                                       
                                                    <input type="text" class="form-control" placeholder="Drop off Address" name="dropoffaddress">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="time" class="title2 col-sm-4">Time</label>                                    
                                                <div class="col-sm-8">                                      
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="(24hr clock)" name="time">
                                                        <label class="input-group-addon"><i class="fa fa-clock-o"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Service Type</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control">
                                                        <option  name="servicetype">Airport Transfer</option>
                                                        <option  name="servicetype">Seaport Transfer</option>
                                                        <option  name="servicetype">Station Transfer</option>
                                                        <option  name="servicetype">Wedding Transfer</option>
                                                        <option  name="servicetype">Corporate Transfer</option>
                                                        <option  name="servicetype">Wedding Transfer</option>
                                                        <option  name="servicetype">Event Transfer</option>
                                                        <option  name="servicetype">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-wrapper">
                                <legend class="title">Payment Type</legend>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-4 title2">Payment Method</label>                            
                                        <div class="col-sm-8">                               
                                            <label class="radio-inline">                             
                                                <input type="radio" name="payment_type"> Cash
                                            </label>                                                          
                                            <label class="radio-inline">          
                                                <input type="radio" name="payment_type"> Card
                                            </label>                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox"> I agree the <a href="#!" class="terms" target="_blank">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <button class="btn btn-default1" type="submit" href="{{url('message')}}">Send</button><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection