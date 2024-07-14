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
      

        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="blog-posts single-post">
                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <blockquote class="blockquote-primary">
                                    <p>
                                        Pellentesque pellentesque eget tempor tellus. Fusce
                                        lacllentesque eget tempor tellus ellentesque pelleinia
                                        tempor malesuada. Euismod atras vulputate iltricies etri
                                        elit. Class aptent taciti sociosqu ad litora torquent
                                        per conubia nostra.
                                    </p>
                                    <footer>
                                        Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                            </div>

                            {{-- <div class="post-date ms-0">
                                <span class="day">10</span>
                                <span class="month">Jan</span>
                            </div> --}}

                            <div class="post-content ms-0">
                                <h2 class="font-weight-semi-bold">
                                    <a href="{{ route('newssingle') }}">News Details</a>
                                </h2>

                                {{-- <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">John Doe</a>
                                    </span>
                                    <span><i class="far fa-folder"></i>
                                        <a href="#">Lifestyle</a>, <a href="#">Design</a>
                                    </span>
                                    <span><i class="far fa-comments"></i>
                                        <a href="#">12 Comments</a></span> --}}
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Curabitur lectus lacus, rutrum sit amet placerat et,
                                    bibendum nec mauris. Duis molestie, purus eget placerat
                                    viverra, nisi odio gravida sapien, congue tincidunt nisl
                                    ante nec tellus. Vestibulum ante ipsum primis in faucibus
                                    orci luctus et ultrices posuere cubilia Curae; Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Fusce
                                    sagittis, massa fringilla consequat blandit, mauris ligula
                                    porta nisi, non tristique enim sapien vel nisl.
                                    Suspendisse vestibulum lobortis dapibus. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere
                                    cubilia Curae; Praesent nec tempus nibh. Donec mollis
                                    commodo metus et fringilla. Etiam venenatis, diam id
                                    adipiscing convallis, nisi eros lobortis tellus, feugiat
                                    adipiscing ante ante sit amet dolor. Vestibulum vehicula
                                    scelerisque facilisis. Sed faucibus placerat bibendum.
                                    Maecenas sollicitudin commodo justo, quis hendrerit leo
                                    consequat ac. Proin sit amet risus sapien, eget interdum
                                    dui. Proin justo sapien, varius sit amet hendrerit id,
                                    egestas quis mauris.
                                </p>
                                <p>
                                    Ut ac elit non mi pharetra dictum nec quis nibh.
                                    Pellentesque ut fringilla elit. Aliquam non ipsum id leo
                                    eleifend sagittis id a lorem. Sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.
                                    Aliquam massa mauris, viverra et rhoncus a, feugiat ut
                                    sem. Quisque ultricies diam tempus quam molestie vitae
                                    sodales dolor sagittis. Praesent commodo sodales purus.
                                    Maecenas scelerisque ligula vitae leo adipiscing a
                                    facilisis nisl ullamcorper. Vestibulum ante ipsum primis
                                    in faucibus orci luctus et ultrices posuere cubilia Curae;
                                </p>
                                <p>
                                    Curabitur non erat quam, id volutpat leo. Nullam pretium
                                    gravida urna et interdum. Suspendisse in dui tellus. Cras
                                    luctus nisl vel risus adipiscing aliquet. Phasellus
                                    convallis lorem dui. Quisque hendrerit, lectus ut accumsan
                                    gravida, leo tellus porttitor mi, ac mattis eros nunc vel
                                    enim. Nulla facilisi. Nam non nulla sed nibh sodales
                                    auctor eget non augue. Pellentesque sollicitudin
                                    consectetur mauris, eu mattis mi dictum ac. Etiam et
                                    sapien eu nisl dapibus fermentum et nec tortor.
                                </p>
                                <p>
                                    Curabitur nec nulla lectus, non hendrerit lorem. Quisque
                                    lorem risus, porttitor eget fringilla non, vehicula sed
                                    tortor. Proin enim quam, vulputate at lobortis quis,
                                    condimentum at justo. Phasellus nec nisi justo. Ut luctus
                                    sagittis nulla at dapibus. Aliquam ullamcorper commodo
                                    elit, quis ornare eros consectetur a. Curabitur nulla dui,
                                    fermentum sed dapibus at, adipiscing eget nisi. Aenean
                                    iaculis vehicula imperdiet. Donec suscipit leo sed metus
                                    vestibulum pulvinar. Phasellus bibendum magna nec tellus
                                    fringilla faucibus. Phasellus mollis scelerisque volutpat.
                                    Ut sed molestie turpis. Phasellus ultrices suscipit
                                    tellus, ac vehicula ligula condimentum et.
                                </p>
                                <p>
                                    Aenean metus nibh, molestie at consectetur nec, molestie
                                    sed nulla. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Aliquam nec euismod urna. Donec gravida
                                    pharetra ipsum, non volutpat ipsum sagittis a. Phasellus
                                    ut convallis ipsum. Sed nec dui orci, nec hendrerit massa.
                                    Curabitur at risus suscipit massa varius accumsan. Proin
                                    eu nisi id velit ultrices viverra nec condimentum magna.
                                    Ut porta orci quis nulla aliquam at dictum mi viverra.
                                    Maecenas ultricies elit in tortor scelerisque facilisis.
                                    Mauris vehicula porttitor lacus, vel pretium est semper
                                    non. Ut accumsan rhoncus metus non pharetra. Quisque
                                    luctus blandit nisi, id tempus tellus pulvinar eu. Nam
                                    ornare laoreet mi a molestie. Donec sodales scelerisque
                                    congue.
                                </p>

                                {{-- <div class="post-block mt-5 post-share">
                                    <h4 class="mb-3">Share this Post</h4>

                                    <!-- Go to www.addtoany.com to customize -->
                                    <!-- AddToAny BEGIN -->
                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_x"></a>
                                        <a class="a2a_button_copy_link"></a>
                                    </div>
                                    <script async src="../../../../static.addtoany.com/menu/page.js"></script>
                                    <!-- AddToAny END -->
                                </div>

                                <div class="post-block mt-4 pt-2 post-author">
                                    <h4 class="mb-3">Author</h4>
                                    <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                        <a href="{{ route('newssingle') }}">
                                            <img src="{{ asset('img/avatars/avatar.jpg') }}" alt="" />
                                        </a>
                                    </div>
                                    <p>
                                        <strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John
                                                Doe</a></strong>
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nam viverra euismod odio, gravida pellentesque urna
                                        varius vitae. Sed dui lorem, adipiscing in adipiscing
                                        et, interdum nec metus. Mauris ultricies, justo eu
                                        convallis placerat, felis enim ornare nisi, vitae mattis
                                        nulla ante id dui.
                                    </p>
                                </div> --}}
                                <div id="comments" class="post-block mt-5 post-comments">
                                    <h4 class="mb-3">Comments (3)</h4>

                                    <ul class="comments">
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt=""
                                                        src="{{ asset('img/avatars/avatar-2.jpg') }}" />
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong>John Doe</strong>
                                                        <span class="float-end">
                                                            <span>
                                                                <a href="#"><i class="fas fa-reply"></i>
                                                                    Reply</a></span>
                                                        </span>
                                                    </span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Nam viverra euismod odio,
                                                        gravida pellentesque urna varius vitae, gravida
                                                        pellentesque urna varius vitae. Lorem ipsum
                                                        dolor sit amet, consectetur adipiscing elit. Nam
                                                        viverra euismod odio, gravida pellentesque urna
                                                        varius vitae. Sed dui lorem, adipiscing in
                                                        adipiscing et, interdum nec metus. Mauris
                                                        ultricies, justo eu convallis placerat, felis
                                                        enim ornare nisi, vitae mattis nulla ante id
                                                        dui.
                                                    </p>
                                                    <span class="date float-end">January 12, 2024 at 1:38 pm</span>
                                                </div>
                                            </div>

                                            <ul class="comments reply">
                                                <li>
                                                    <div class="comment">
                                                        <div
                                                            class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                            <img class="avatar" alt=""
                                                                src="{{ asset('img/avatars/avatar-3.jpg') }}" />
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
                                                                <strong>John Doe</strong>
                                                                <span class="float-end">
                                                                    <span>
                                                                        <a href="#"><i class="fas fa-reply"></i>
                                                                            Reply</a></span>
                                                                </span>
                                                            </span>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Nam viverra euismod odio,
                                                                gravida pellentesque urna varius vitae,
                                                                gravida pellentesque urna varius vitae.
                                                            </p>
                                                            <span class="date float-end">January 12, 2024 at 1:38
                                                                pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment">
                                                        <div
                                                            class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                            <img class="avatar" alt=""
                                                                src="{{ asset('img/avatars/avatar-4.jpg') }}" />
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
                                                                <strong>John Doe</strong>
                                                                <span class="float-end">
                                                                    <span>
                                                                        <a href="#"><i class="fas fa-reply"></i>
                                                                            Reply</a></span>
                                                                </span>
                                                            </span>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Nam viverra euismod odio,
                                                                gravida pellentesque urna varius vitae,
                                                                gravida pellentesque urna varius vitae.
                                                            </p>
                                                            <span class="date float-end">January 12, 2024 at 1:38
                                                                pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt=""
                                                        src="{{ asset('img/avatars/avatar.jpg') }}" />
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong>John Doe</strong>
                                                        <span class="float-end">
                                                            <span>
                                                                <a href="#"><i class="fas fa-reply"></i>
                                                                    Reply</a></span>
                                                        </span>
                                                    </span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.
                                                    </p>
                                                    <span class="date float-end">January 12, 2024 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt=""
                                                        src="{{ asset('img/avatars/avatar.jpg') }}" />
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong>John Doe</strong>
                                                        <span class="float-end">
                                                            <span>
                                                                <a href="#"><i class="fas fa-reply"></i>
                                                                    Reply</a></span>
                                                        </span>
                                                    </span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.
                                                    </p>
                                                    <span class="date float-end">January 12, 2024 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="post-block mt-5 post-leave-comment">
                                    <h4 class="mb-3">Leave a comment</h4>

                                    <form class="contact-form p-4 rounded bg-color-grey"
                                        action="https://www.okler.net/previews/porto/10.2.0/php/contact-form.php"
                                        method="POST">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Full
                                                        Name</label>
                                                    <input type="text" value=""
                                                        data-msg-required="Please enter your name." maxlength="100"
                                                        class="form-control" name="name" required />
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Email
                                                        Address</label>
                                                    <input type="email" value=""
                                                        data-msg-required="Please enter your email address."
                                                        data-msg-email="Please enter a valid email address."
                                                        maxlength="100" class="form-control" name="email" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label
                                                        class="form-label required font-weight-bold text-dark">Comment</label>
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control"
                                                        name="message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col mb-0">
                                                    <input type="submit" value="Post Comment"
                                                        class="btn btn-primary btn-modern"
                                                        data-loading-text="Loading..." />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
