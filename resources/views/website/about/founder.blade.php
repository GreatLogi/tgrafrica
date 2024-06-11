@extends('website.layouts.main')

@section('title')
    Founder
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url({{ asset('frontend/img/page-header/page-header-backgrounda.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Founder <strong></strong></h1>
                    {{-- <span class="sub-title">Get in touch with us</span> --}}
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About</li>
                        <li class="active">Founder</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">
            <div class="col">
                <img class="float-start img-fluid" width="450" height="450"
                src="{{ !empty($founder->image) ? asset($founder->image) : asset('upload/user.jpeg') }}"
                alt="Lordy Emmen" style="border-radius: 50%; object-fit: cover; margin-right: 20px;">
                <p style="text-align: justify">{{ $founder->founder_profile }}
                </p>
            </div>
        </div>

    </div>
@endsection
