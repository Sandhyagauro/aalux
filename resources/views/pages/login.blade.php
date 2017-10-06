<?php

$nav = 8;
?>
@extends('includes.template')
@section('content')
<section class="innerbanner login-banner">
    <div class="banner-info">
        <h1>Login Or Register</h1>
        <h5><a href="index">Home</a> / Login</h5>
    </div>
</section>
<section class="login-page section-break">
    <div class="container">
        <div class="account-wrap">
            <div class="row">
                <div class="col-md-7">
                    <div class="create-account">
                        <h5 class="title">Open an Account With Aalux Chauffeurs.</h5>
                        <a href="signup" class="btn btn-default1">Create an Account</a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="inr-form login-form">
                        <h4 class="title">Login</h4>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Email Address / Phone No." class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <h6><a href="forget">Forgot Password? Click Here</a></h6>
                            <button class="btn btn-default1" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection