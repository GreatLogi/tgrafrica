@extends('website.layouts.main')

@section('title')
    Purpose
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url({{ asset('img/page-header/page-header-backgrounda.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Our <strong>Purpose</strong></h1>
                    {{-- <span class="sub-title">Get in touch with us</span> --}}
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About</li>
                        <li class="active">Purpose</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">

            {{--
                <img class="float-start img-fluid pr-5" width="250" height="211"
                    src="{{ asset('img/layout-stylesm.png') }}" alt="Lordy Emmen"> --}}
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                        <span>Purpose </span>

                    </h2>
                </div>
                <p style="text-align: justify">At TGR Africa, our purpose is to try and remove some of the key barriers that prevents the African diaspora from being able to invest in Africa. We believe our advisory services will be able to make it easier for more people in the diaspora to feel confident about being able to return back home and set us successful enterprises.  We also aim to make it easier for the diaspora to have access to Investment vehicles that will make investing in Africa safer.
                </p>

                <p style="text-align: justify"> We want to give the diaspora access to some of the most innovative and fastest growing startups that will play a major role in the development of Africa. We view ourselves as being part of the diaspora support services, designed to help facilitate engagement between the African Diaspora and Africa. Our primary focus will centre on business and investment advisory because we believe these are the two key areas where there have traditionally been very high barriers preventing the diaspora from engaging successfully.
                </p>

                <p style="text-align: justify">We also believe  business and investment are the two key areas of engagement that offer long term sustainable economic benefits to Africa and that is why we must remove as many barriers as possible that prevents those in the diaspora from doing so. 
                </p>

            </div>
        </div>

    </div>
@endsection
