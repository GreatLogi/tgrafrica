@extends('website.layouts.main')

@section('title')
Founders
@endsection

@section('content')
<section
    class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
    style="background-image: url({{ asset('img/page-header/page-header-backgrounda.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Founders <strong></strong></h1>
                {{-- <span class="sub-title">Get in touch with us</span> --}}
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About</li>
                    <li class="active">Founders</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-2">

    <div class="row mb-5">
        <div class="col">


            <img class="float-start img-fluid" width="450" height="11" src="{{ asset('img/lordy.png') }}"
                alt="Lordy Emmen">
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



        </div>
    </div>
    <hr>
    <div class="row mt-2">
        <div class="col">
            <img class="float-start img-fluid" width="450" height="11"
                src="{{ asset('img/clement.png') }}" alt="Agyegewe Chanayireh">
            <p style="text-align: justify"><strong>Agyegewe Chanayireh Co-Founder and COO</strong>Agyegewe Chanayireh is
                the co founder and Chief Operations Officer of TGR Africa. He also helped
                co-write ` The Great Return` along side business partner <strong>Lordy Emmen.</strong>
                Agyegewe`s interest in joining the
                great return begun in his students days at the University of Manchester where he studied Modern Middle
                Eastern History. The course was intended to prepare him to work as a foreign diplomat in the Middle East
                on behalf of the British Government and it was through his studies that he was awakened to colonialism
                and imperialism and the long term consequences it’s had on the developing world.
                <br>
                Being of Ghanian
                descent, he realised that the same exposure to Colonialism and Imperialism that the Middle East faced
                was evident in Africa and this led to him coming to the conclusion that he either be a part of the
                solution or continue to be a part of the problem. In his professional life, he has worked as a Business
                Development Executive for Financial institutions, training providers and marketing agencies.
                <br>
                His primary
                role at TGR Africa is the management of all business advisory services and to help develop investment
                products that can effectively channel diaspora capital into highly productive areas that will facilitate
                further development of African economies.
            </p>
        </div>
    </div>

</div>
@endsection