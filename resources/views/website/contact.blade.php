@extends('website.website.layouts.main')

@section('title')
    Contact
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url(img/page-header/page-header-background.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Contact <strong>Us</strong></h1>
                    <span class="sub-title">Get in touch with us</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div role="main" class="main">



        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                    <form class="contact-form" action="#" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Country Of Residence</label>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Nationality</label>
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                    class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-secondary btn-modern"
                                    data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2 ">
                            <li><i class="fas fa-map-marker-alt top-6 text-color-secondary"></i> <strong
                                    class="text-dark">Address:</strong>
                                <p class="m-0">GB33 Nii Tsoku Komletse, Abbey St</p>
                                <p class="m-0">Gbawe Zero, Greater Accra</p>
                            </li>
                            <li><i class="fas fa-phone top-6 text-color-secondary"></i> <strong
                                    class="text-dark">Phone:</strong> (123) 456-789</li>
                            <li><i class="fas fa-envelope top-6 text-color-secondary"></i> <strong
                                    class="text-dark">Email:</strong> <a
                                    href="https://www.okler.net/cdn-cgi/l/email-protection#91fcf0f8fdd1f4e9f0fce1fdf4bff2fefc"><span
                                        class="__cf_email__"
                                        data-cfemail="3558545c5975504d54584559501b565a58">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                    <p class="lead mb-0 text-4">Don't hesitate to call, text,email or visit our office for any further
                        inquiries.</p>

                </div>

            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

    </div>
@endsection
