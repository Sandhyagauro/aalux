<?php

$nav = 8;
?>
@extends('includes.template')
@section('content')
<section class="innerbanner login-banner">
    <div class="banner-info">
        <h1>Forget Password</h1>
        <h5><a href="index.blade.php">Home</a> / Forget</h5>
    </div>
</section>
<section class="login-page section-break">
    <div class="container">
        <div class="account-wrap">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h5 class="title">Please provide your Email Id or Phone No. which you provided in your Registration process.</h5>
                    <div class="inr-form">
                        <form>
                            <div class="form-group">
                                <!--<label>Email Address</label>-->
                                <input type="text" class="form-control" placeholder="Type your Email/Phone no. Here"=>
                            </div>
                            <button type="submit" class="btn btn-default1">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection