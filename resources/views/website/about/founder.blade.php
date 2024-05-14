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
                {{-- <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                        <span>Founder </span>

                    </h2>
                </div> --}}

                <img class="float-start img-fluid" width="450" height="11"
                    src="{{ asset('frontend/img/layout-styles.png') }}" alt="Lordy Emmen">
                <p style="text-align: justify"><strong>Lordy Emmen</strong> is a diaspora entrepreneur, diaspora activist
                    and author of<strong> `The Great Return`</strong>.
                    She is of Ghanian decent and has spent the past 25 years living in the UK where she had a successful
                    career as a Management Accountant.
                    Since 2019, along with her husband, she has been able to make investments in the poultry sector as a
                    result of recognising the dependency
                    a country like Ghana has on foreign food imports which can be sourced locally.
                    She and her husband have also made investments in Ghana’s growing real estate market.
                    <br>
                    Her experience in joining the great return , doing business in Africa and being passionate about African
                    developed served as the inspiration
                    behind the creation of <strong>TGR Africa</strong>. Lordy is a strong advocate for the diasporas
                    involvement in African Development and believes that we in
                    the diaspora can play a significant role in the economic transformation of Africa. When it comes to
                    doing business in Africa,
                    her guiding philosophy is to find innovative ways to make profit through the fulfilment of purpose.
                    <br>
                    She believes that we in the Diaspora have a great opportunity to reap significant economic rewards if we
                    are willing to take up
                    the challenge of investing in<strong> African development</strong>.
                </p>

                {{-- <p style="text-align: justify">When it comes to doing business in Africa,
                     her guiding philosophy is to find innovative ways to make profit through the fulfilment of purpose.
                     She believes that we in the Diaspora have a great opportunity to reap significant economic rewards if we are willing to take up
                     the challenge of investing in African development.
                </p> --}}



            </div>
        </div>

    </div>
@endsection
