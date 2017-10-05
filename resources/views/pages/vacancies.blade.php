<?php

$nav = 6;
?>
@extends('includes.template')
@section('content')
<section class="innerbanner vacancies-banner">
    <div class="banner-info">
        <h1>Vacancies</h1>
        <h5><a href="index.blade.php">Home</a> / Vacancies</h5>
    </div>
</section>
<section class="reservation-page section-break">
    <div class="container">
        <div class="reservation">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="reservation-form">
                        <form class="form-horizontal" action="{{url('vacanciesform')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-wrapper personal-details">
                                <legend class="title">Personal Details</legend>
                                <fieldset>                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">First Name</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="First Name" required name="firstname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Phone No.</label>                                    
                                                <div class="col-sm-8">                                       
                                                    <input  type="text" class="form-control" placeholder="Phone/Mobile Number" required name="phonenumber">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="title2 col-sm-4">Email</label>  
                                                <div class="col-sm-8">                                
                                                    <input type="email" class="form-control" placeholder="Email Address" required name="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">Vehicle Made</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="Vehicle Made" requiured name="vehiclemade">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">Last Name</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="Last Name" required name="lastname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">Postcode</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="Postcode" required name="postcode">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">PCO License No.</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="PCO License No." required name="licensenumber">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 title2">Vehicle Model</label>                                    
                                                <div class="col-sm-8"> 
                                                    <input  type="text" class="form-control" placeholder="Vehicle Model" required name="vehiclemodel">
                                                </div>
                                            </div>
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