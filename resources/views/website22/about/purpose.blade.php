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
                <p style="text-align: justify">TGR Advisory as a company is guided by the great return philosophy. We
                    believe that the African diaspora
                    can play a significant role in the development of Africa. We believe that the diaspora poccess the
                    skills, expertise and financial capital
                    needed to support African development. Our long term vision is for the African Diaspora to be mobilised
                    into a collective economic unit which
                    can play a significant role in the affairs of African Nations. African development from our perspective
                    is all about creating an Africa which
                    is economically self sufficient, an Africa which has its own unique identity that is not dictated by the
                    West and an Africa which is able to
                    be respected on the international scene.
                </p>

                <p style="text-align: justify"> We want to prevent Africa from ever having to go through the experience of
                    colonialism and imperialism
                    again and we believe this can only be achieved through economic power. We also want to make Africa a
                    desirable place to live so that domestic
                    Africans don’t feel the need to migrate to foreign lands in search of economic opportunities and for
                    Africa to become such a desirable place
                    to live that even those in the Diaspora want to return.

                </p>



            </div>
        </div>

    </div>
@endsection