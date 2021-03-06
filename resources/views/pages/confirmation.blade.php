<?php
$nav = 0;
?>
@extends('includes.template')
@section('content')

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
                    <a href="index#book">Edit Journey Details</a>
                </li>
                <li>
                    <a href="vehicle-seletion">Select Vehicles</a>
                </li>
                <li>
                    <a href="transfer">Transfer Details</a>
                </li>
            </ul>
        </div>
        <div class="transfer-wrapper">
            <div class="width-65">
                <form class="form-horizontal" action="thank">
                    <div class="form-wrapper personal-details">
                        <legend class="title">Personal Details</legend>
                        <fieldset>                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-4 title2">Name</label>                                    
                                        <div class="col-sm-8"> 
                                            <p class="form-control-static">test</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Phone No.</label>                                    
                                        <div class="col-sm-8">                                       
                                            <p class="form-control-static">789456312</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Email</label>  
                                        <div class="col-sm-8">                                
                                            <p class="form-control-static">test@test.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Passengers</label>                                    
                                        <div class="col-sm-8">
                                            <p class="form-control-static">1</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="title2 col-sm-4">Luggage</label>                                    
                                        <div class="col-sm-8">
                                            <p class="form-control-static">1</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Child Seats</label>                                    
                                        <div class="col-sm-8">
                                            <p class="form-control-static">1</p>
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
                                            <p class="form-control-static">testtest</p>                          
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Date</label>                                    
                                        <div class="col-sm-8">                                      
                                            <div class="input-group">
                                                <p class="form-control-static">11/11/1111</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="title2 col-sm-4">Drop off Address</label>                                    
                                        <div class="col-sm-8">                                       
                                            <p class="form-control-static">testtest</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="time" class="title2 col-sm-4">Time</label>                                    
                                        <div class="col-sm-8">                                      
                                            <div class="input-group">
                                                <p class="form-control-static">11:11 Am</p>
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
                                        <input type="radio" name="payment_type" checked=""> Cash
                                    </label>                                                          
                                    <label class="radio-inline">          
                                        <input type="radio" name="payment_type" disabled=""> Card
                                    </label>                        
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">                                
                                    <label class="checkbox-inline">                                    
                                        <input type="checkbox" checked="" disabled=""> I agree the <a href="#!" class="terms" target="_blank">terms and conditions</a>                       
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