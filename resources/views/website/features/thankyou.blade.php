@extends('website.layouts.main')
@section('title')
Thank You
@endsection
@section('content')
<section
    class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
    style="background-image: url(img/page-header/page-header-background.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Read<strong> Our News</strong></h1>
                <span class="sub-title">Read more about us</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">News</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div role="main" class="main">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <img src="{{ asset('frontend/img/correct.png') }}" alt="Thank You" class="img-fluid mb-2 small-image">
                <br>
                <br>
                <p class="thanks">Thank You</p>
                <br>
                <p class="lead">
                    for booking a consultation with TGR Africa. An advisor will contact you soon.
                </p>
                <!-- <a href="{{ route('home') }}" class="btn btn-primary mt-3">Homepage</a> -->

                <div class="container py-4">
                <div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="font-weight-medium">Connect With Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61559081140764" target="_blank" class="btn btn-link">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://www.youtube.com/@TGRAfrica" target="_blank" class="btn btn-link">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                    <a href="https://wa.me/233500200335" target="_blank" class="btn btn-link">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="font-weight-medium">Back Home</h3>
                <a href="{{ route('home') }}" class="btn btn-danger mt-3">Homepage</a>
            </div>
        </div>
    </div>
</div>
</div>
            </div>
        </div>
    </div>
</div>

<style>
    .thanks {
    color: #000000;
    font-size: 5rem; 
    font-weight: bold; /* Bold text */
    margin: 1rem 0; /* Margin for spacing */
}

.small-image {
    width: 50px; 
    height: auto; /* Maintain aspect ratio */
}

.social-icons {
    display: flex;
    justify-content: space-around; /* Space the icons evenly */
    margin-top: 20px; /* Space between title and icons */
}

.btn-link {
    color: #000; /* Change icon color */
    text-decoration: none; /* Remove underline */
}

.btn-link:hover {
    color: #007bff; /* Change color on hover */
}
</style>
@endsection
