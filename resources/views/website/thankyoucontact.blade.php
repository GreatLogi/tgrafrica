@extends('website.layouts.main')

@section('title')
Thank You
@endsection

@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
    style="background-image: url(img/page-header/page-header-background.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Our <strong>News</strong></h1>
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
                <img src="{{ asset('frontend/img/tanx.png') }}" alt="Thank You" class="img-fluid mb-4">
                <p class="lead">for contacting TGR Africa. An adivisor will contact you soon...</p>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3">Go Home</a>
            </div>
        </div>
    </div>
</div>
@endsection