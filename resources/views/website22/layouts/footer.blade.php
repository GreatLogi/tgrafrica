<footer id="footer">
    <div class="container">
        <div class="footer-ribbon"><span>Get in Touch</span></div>
        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">NEWSLETTER</h5>
                <p class="pe-1">
                    Keep up on our always evolving products and services.
                   <br> Enter your e-mail address and subscribe to our newsletter.
                </p>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Success!</strong> You've been added to our email list.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm"
                    action="#" method="POST"
                    class="me-4 mb-3 mb-md-0">
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light" placeholder="Email Address"
                            name="newsletterEmail" id="newsletterEmail" type="email" />
                        <button class="btn btn-light text-color-dark" type="submit">
                            <strong>GO!</strong>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">LATEST POSTS</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2 pb-1">
                        <a href="#">
                            <p class="text-3 text-color-light opacity-8 mb-0">
                                <i class="fas fa-angle-right text-color-secondary"></i><strong
                                    class="ms-2 font-weight-semibold">News 1</strong>
                            </p>
                            <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                        </a>
                    </li>
                    <li class="mb-2 pb-1">
                        <a href="#">
                            <p class="text-3 text-color-light opacity-8 mb-0">
                                <i class="fas fa-angle-right text-color-secondary"></i><strong
                                    class="ms-2 font-weight-semibold">News 2</strong>
                            </p>
                            <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                        </a>
                    </li>
                  
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">CONTACT US</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1">
                            <i class="far fa-dot-circle text-color-secondary"></i>
                            <p class="m-0">GB33 Nii Tsoku Komletse, Abbey St</p>
                             <p class="m-0">Gbawe Zero, Greater Accra</p>
                        </li>
                        <li class="mb-1">
                            <i class="fab fa-whatsapp text-color-secondary"></i>
                            <p class="m-0">
                                <a href="tel:8001234567">+233 (0) 123-4567</a>
                            </p>
                        </li>
                        <li class="mb-1">
                            <i class="far fa-envelope text-color-secondary"></i>
                            <p class="m-0">
                                <a
                                    href="https://www.okler.net/cdn-cgi/l/email-protection#4e232f27220e2b362f233e222b602d2123"><span
                                        class="__cf_email__"
                                        data-cfemail="ec818d8580ac89948d819c8089c28f8381">[email&#160;protected]</span></a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-3 mb-3">FOLLOW US</h5>
                <ul class="social-icons">
                    <li class="social-icons-facebook">
                        <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="social-icons-twitter">
                        <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                class="fab fa-x-twitter"></i></a>
                    </li>
                    <li class="social-icons-linkedin">
                        <a href="http://www.youtube.com/" target="_blank" title="Youtube"><i
                                class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div
                    class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="{{route('home')}}" class="logo pe-0 pe-lg-3">
                        <img alt="TGR Logo" src="{{asset('img/logo-footer.png')}}" class="opacity-5" width="49"
                            height="22" data-plugin-options="{'appearEffect': 'fadeIn'}" />
                    </a>
                </div>
                <div
                    class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>© Copyright 2024. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul>
                            <li>
                                <i class="fas fa-angle-right"></i><a href="javascript:void(0)"
                                    class="ms-1 text-decoration-none">
                                    FAQ's</a>
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i><a href="javascript:void(0)"
                                    class="ms-1 text-decoration-none">
                                    Available Books</a>
                            </li>
                            <li>
                                <i class="fas fa-angle-right"></i><a href="javascript:void(0)"
                                    class="ms-1 text-decoration-none">
                                    Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
