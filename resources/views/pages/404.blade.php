<?php
$nav = 000;
?>
@extends('includes.template')
@section('content')
<section class="error-templates section-break">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <figure>
                    <img src="assets/images/404.png" alt="boston airport car">
                </figure>
            </div>
            <div class="col-md-6">
                <div class="error-info">
                    <h1>Error 404!</h1>
                    <h2>This page could not be found :(</h2>
                    <p><span>Sorry,</span> The link you followed is not found.</p>
                    <a href="index.blade.php" class="btn btn-default">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection