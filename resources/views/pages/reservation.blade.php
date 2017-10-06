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
                        <form class="form-horizontal"  action="{{url('reservationform')}}" method="post">
                            {!! csrf_field() !!}

                            <div class="form-wrapper personal-details">
                                <legend class="title">Personal Details</legend>
                                <fieldset>                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">Name</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="Full Name" name="fullname"  required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Phone No.</label>                                    
                                                <div class="col-sm-8">                                       
                                                    <input  type="number" class="form-control" placeholder="Phone/Mobile Number" name="phonenumber"  required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Email</label>  
                                                <div class="col-sm-8">                                
                                                    <input type="email" class="form-control" placeholder="Email Address" name="email"  required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Passengers</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="passengers"  >
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="title2 col-sm-4">Luggage</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="luggage">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Child Seats</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="child_seats">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
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
                                                    <input type="text" class="form-control" placeholder="Pick up Address" id="pickupaddress" name="pickupaddress"  required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Date</label>                                    
                                                <div class="col-sm-8">                                      
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="(dd/mm/yyyy)" id="datepicker" name="date"  required="">
                                                        <label class="input-group-addon"><i class="fa fa-calendar"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Vehicle Type</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="vehicletype"  required="">
                                                        <option value="2" >Business Class</option>
                                                        <option value="4" >VIP Class</option>
                                                        <option value="5" >Range Rover</option>
                                                        <option value="6" >MPV</option>
                                                        <option value="7" >Minibuses</option>
                                                        <option value="8" >First Class</option>
                                                        <option value="9" >Rolls Royce Phantom</option>
                                                        <option value="10" >Mercedes S Class</option>
                                                        <option value="11" >Bentley</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Drop off Address</label>                                    
                                                <div class="col-sm-8">                                       
                                                    <input type="text" class="form-control" placeholder="Drop off Address" name="dropoffaddress"  required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="time" class="title2 col-sm-4" id="time"  required="">Time</label>
                                                <div class="col-sm-8">                                      
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="(24hr clock)" id="timepicker" name="time"  required="">
                                                        <label class="input-group-addon"><i class="fa fa-clock-o"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Service Type</label>                                    
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="servicetype"  required="">
                                                        <option>Airport Transfer</option>
                                                        <option>Seaport Transfer</option>
                                                        <option>Station Transfer</option>
                                                        <option>Wedding Transfer</option>
                                                        <option>Corporate Transfer</option>
                                                        <option>Wedding Transfer</option>
                                                        <option>Event Transfer</option>
                                                        <option>Other</option>
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
                                    <div class="form-group" >
                                        <label class="col-sm-4 title2">Payment Method</label>                            
                                        <div class="col-sm-8" >
                                            <label class="radio-inline">                             
                                                <input type="radio" name="payment_type" value="cash"   required=""> Cash
                                            </label>                                                          
                                            <label class="radio-inline">          
                                                <input type="radio" name="payment_type" value="card"  required=""> Card
                                            </label>                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox"  required=""> I agree the <a href="#!" class="terms" target="_blank">terms and conditions</a>
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