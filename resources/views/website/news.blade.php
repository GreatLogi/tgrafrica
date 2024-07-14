@extends('website.layouts.main')

@section('title')
    News
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
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
        <div class="container">
            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <div class="blog-posts">
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/the-power.jpg') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">The power of African Diaspora Capital</a>
                                            </h2>
                                            <p>
                                                It has been reported that approximately $60 billion is what the African
                                                Diaspora provided in financial support to the continent of Africa. This...
                                                {{-- figure is actually way more significant than the total amount of aid money
                                                Africa receives from donor countries. It is time both the African Diaspora
                                                and African governments begun to realise the collective economic power the
                                                African Diaspora hold as a group. --}}
                                            </p>

                                            <div class="post-meta">
                                                {{-- <span><i class="far fa-user"></i> By
                                                    <a href="#">Bob Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span> --}}
                                                <span class="d-block mt-2"><a href="#"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/cedi.jpg') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">Is The Depreciation of The Ghana Cedi Good or Bad
                                                </a>
                                            </h2>
                                            <p>
                                                Recently the Ghanaian Cedi has been depreciating against the dollar and this
                                                has led to a lot of conversations regarding the...
                                                {{-- for Ghanians. Currency instability is a well know feature of import
                                                dependent countries like Ghana and although there are certain negative
                                                consequences as a result of further depreciation, it doesn’t necessary mean
                                                that a weaker currency is inherently bad. --}}
                                            </p>

                                            <div class="post-meta">
                                                {{-- <span><i class="far fa-user"></i> By
                                                    <a href="#">John Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span> --}}
                                                <span class="d-block mt-2"><a href="#"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="#">
                                                <img src="{{ asset('img/blog/medium/unfair.png') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">Unfair advantages of African Diaspora</a>
                                            </h2>
                                            <p>
                                                When we compare Africans on the continent to Africans in the diaspora, would
                                                it be fair to say that the African Diaspora have certain unfair
                                                advantages...
                                                {{-- over Africans on the continent and if so what should they do about their
                                                unfair advantages in the aid of African development?. --}}
                                            </p>

                                            <div class="post-meta">
                                                {{-- <span><i class="far fa-user"></i> By
                                                    <a href="#">John Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span> --}}
                                                <span class="d-block mt-2"><a href="#"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/return.png') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">How the year of return impacted African-Americans
                                                    self identity
                                                </a>
                                            </h2>
                                            <p>
                                                The year of return marked the 400th year since the first enslaved African
                                                were brought to the United States...
                                                {{-- Americans return back to the ancestral lands of their forefathers. it was an
                                                opportunity for them to reconnect with their African heritage and go back to
                                                where it all started. --}}
                                            </p>

                                            <div class="post-meta">
                                                {{-- <span><i class="far fa-user"></i> By
                                                    <a href="#">Jessica Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span> --}}
                                                <span class="d-block mt-2"><a href="{{ route('newssingle') }}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                {{-- <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/blog-5.jpg') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">The Blue Sky</a>
                                            </h2>
                                            <p>
                                                Euismod atras vulputate iltricies etri elit. Class
                                                aptent taciti sociosqu ad litora torquent per conubia
                                                nostra, per inceptos himenaeos.
                                            </p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By
                                                    <a href="#">Robert Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span>
                                                <span class="d-block mt-2"><a href="{{ route('newssingle') }}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/blog-6.jpg') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">Night Life</a>
                                            </h2>
                                            <p>
                                                Euismod atras vulputate iltricies etri elit. Class
                                                aptent taciti sociosqu ad litora torquent per conubia
                                                nostra, per inceptos himenaeos.
                                            </p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By
                                                    <a href="#">Robert Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span>
                                                <span class="d-block mt-2"><a href="{{ route('newssingle') }}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/blog-7.jpg') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">Another World Perspective</a>
                                            </h2>
                                            <p>
                                                Euismod atras vulputate iltricies etri elit. Class
                                                aptent taciti sociosqu ad litora torquent per conubia
                                                nostra, per inceptos himenaeos.
                                            </p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By
                                                    <a href="#">John Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span>
                                                <span class="d-block mt-2"><a href="{{ route('newssingle') }}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{ route('newssingle') }}">
                                                <img src="{{ asset('img/blog/medium/blog-8.jpg') }}"
                                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                                <a href="{{ route('newssingle') }}">The Creative Team</a>
                                            </h2>
                                            <p>
                                                Euismod atras vulputate iltricies etri elit. Class
                                                aptent taciti sociosqu ad litora torquent per conubia
                                                nostra, per inceptos himenaeos.
                                            </p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By
                                                    <a href="#">Robert Doe</a>
                                                </span>
                                                <span><i class="far fa-folder"></i> <a href="#">News</a>,
                                                    <a href="#">Design</a>
                                                </span>
                                                <span><i class="far fa-comments"></i>
                                                    <a href="#">12 Comments</a></span>
                                                <span class="d-block mt-2"><a href="{{ route('newssingle') }}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div> --}}
                                </article>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <ul class="pagination float-end">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
@endsection
