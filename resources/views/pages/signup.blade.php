<?php

$nav = 8;
?>
@extends('includes.template')
@section('content')
<section class="innerbanner login-banner">
    <div class="banner-info">
        <h1>Account Registration</h1>
        <h5><a href="index">Home</a> / Forget</h5>
    </div>
</section>
<section class="login-page section-break">
    <div class="container">
        <div class="account-wrap">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="inr-form login-form">
                        <h4 class="title">Personal Details</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone No." class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Your Image</label>
                                    <div class="form-group">
                                        <input type="file">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" placeholder="Re-Enter Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-default1" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection