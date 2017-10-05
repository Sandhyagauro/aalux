<?php
$nav = 0;
?>
@extends('includes.template')
@section('content')
<!--<section class="innerbanner vehicle-banner">
    <div class="banner-info">
        <h1>Vehicle Selection</h1>
        <h5><a href="index.php">Home</a> / Vehicle Selection</h5>
    </div>
</section>-->
<section class="vehicle-page section-break">
    <div class="container">
        <!--        <ul class="list-inline journey">
                    <li><a href="../">Edit Journey Details</a></li>
                    <li><a href="#!" class="journey-view-detail">View Journey Details</a></li>
                </ul>-->
        <div class="journey-detail">
            <h4 class="title">View Journey Details</h4>
            <ul class="list-inline">
                <li>
                    <label>Pick Up Address</label><span>Boston Logan International Airport</span>
                </li>
                <li>
                    <label>Drop Off Address</label><span>Arizona, United States</span>
                </li>
                <li>
                    <label>Duration-Distance</label><span>About 0 min – 0miles</span>
                </li>
                <li>
                    <label>Date-Time</label><span>10/03/2017 - 1:00am</span>
                </li>
                <li>
                    <label>Luggages</label><span>0 - 4</span>
                </li>
                <li>
                    <label>Baby Seats</label><span>0 ()</span>
                </li>
            </ul>
            <div class="choosed-vehicle">
                <div class="row">
                    <div class="col-md-6">
                        <figure>
                            <img src="assets/images/sedn.png" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-left">Mercedes Benz C Class </h6>
                        <h4 class="text-left">£ 2098.75</h4>
                        <ul class="list-inline pull-left">
                            <li><i class="fa fa-user"></i> X3</li>
                            <li><i class="fa fa-suitcase"></i> X0</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="journey-nav">
            <ul>
                <li>
                    <a href="index.blade.php#book">Edit Journey Details</a>
                </li>
                <li>
                    <a href="vehicle-seletion.blade.php">Select Vehicles</a>
                </li>
                <!--                <li class="active">
                                    <a href="#!">Transfer Details</a>
                                </li>-->
            </ul>
        </div>
        <div class="transfer-wrapper">
            <div class="width-65">
                <form class="form-horizontal" action="confirmation.blade.php">
                    <div class="form-wrapper personal-details">
                        <legend class="title">Personal Details</legend>
                        <fieldset>                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-4 title2">Name</label>                                    
                                        <div class="col-sm-8"> 
                                            <input  type="text" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Phone No.</label>                                    
                                        <div class="col-sm-8">                                       
                                            <input  type="text" class="form-control" placeholder="Phone/Mobile Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Email</label>  
                                        <div class="col-sm-8">                                
                                            <input type="email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Passengers</label>                                    
                                        <div class="col-sm-8">
                                            <select class="form-control">
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
                                            <select class="form-control">
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
                                            <select class="form-control">
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
                                            <input type="text" class="form-control" placeholder="Pick up Address">                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Date</label>                                    
                                        <div class="col-sm-8">                                      
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="(dd/mm/yyyy)">
                                                <label class="input-group-addon"><i class="fa fa-calendar"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Drop off Address</label>                                    
                                        <div class="col-sm-8">                                       
                                            <input type="text" class="form-control" placeholder="Drop off Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="time" class="title2 col-sm-4">Time</label>                                    
                                        <div class="col-sm-8">                                      
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="(24hr clock)">
                                                <label class="input-group-addon"><i class="fa fa-clock-o"></i></label>
                                            </div>
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
                    <button class="btn btn-default1" type="submit">Submit</button><br><br>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection