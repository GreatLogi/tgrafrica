<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                <li class="social-icons-facebook" style="border-radius: 40%"><a
                                        href="https://www.facebook.com/profile.php?id=61559081140764"
                                        target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                        title="X"><i class="fab fa-x-twitter"></i></a></li>
                                <li class="social-icons-youtube" style="border-radius: 40%"><a
                                        href="http://www.youtube.com/@TGRAfrica" target="_blank" title="Youtube"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img alt="TGR" width="120" data-sticky-width="100"
                                    src="{{ asset('img/logo-default-slim.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-center">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li> <a class="  {{ Request::is('home') ? 'active' : '' }}"
                                                href="{{ route('home') }}"> Home </a>
                                        </li>
                                        <li class="dropdown"> <a
                                                class="dropdown-item dropdown-toggle  {{ Request::is('about*') ? 'active' : '' }}"
                                                href="javascript:void(0)"> About us </a>
                                            <ul class="dropdown-menu">
                                                <li> <a class="dropdown-item"
                                                        href="{{ route('about.founder') }}">Founders</a>
                                                </li>

                                                <li> <a class="dropdown-item"
                                                        href="{{ route('about.vision') }}">Vision</a>
                                                </li>

                                                <li> <a class="dropdown-item"
                                                        href="{{ route('about.mission') }}">Mission</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="dropdown"> <a
                                                class="dropdown-item dropdown-toggle {{ Request::is('advisory*') ? 'active' : '' }}"
                                                href="javascript:void(0)">Advisory</a>
                                            <ul class="dropdown-menu">
                                                <li> <a class="dropdown-item"
                                                        href="{{ route('features.consult') }}">Book a Consultation</a>
                                                </li>
                                                <li> <a class="dropdown-item"
                                                        href="{{ route('advisory.brainstorm') }}">TGR Brainstorm</a>
                                                </li>

                                                <li> <a class="dropdown-item"
                                                        href="{{ route('advisory.analytic') }}">TGR Analytics</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                Features </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu"> <a class="dropdown-item"
                                                        href="javascript:void(0)">Books</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('features.book') }}">The Great
                                                                Return</a></li>
                                                    </ul>
                                                </li>
                                                {{-- <li> <a class="dropdown-item" href="#">Interviews</a>

                                                </li>

                                                <li> <a class="dropdown-item" href="#">Events</a>

                                                </li> --}}
                                            </ul>
                                        </li>
                                        {{--
                                        <li> <a class=" " href="{{ route('partners') }}"> Partners </a>

                                        </li> --}}

                                        <li> <a class=" {{ Request::is('news') ? 'active' : '' }} "
                                                href="{{ route('news') }}"> Blog </a>
                                        </li>

                                        <li> <a class="  {{ Request::is('contact') ? 'active' : '' }}"
                                                href="{{ route('contact') }}">Contact Us </a>
                                        </li>
                                        <li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#">
                                                Investors Community</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0)" class="nav-link" data-bs-toggle="modal"
                                                        data-bs-target="#prospertousModal">Prospectus</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex"> <a
                                    href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch" aria-label="Search"><i
                                        class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="#" method="get">
                                        <div class="simple-search input-group"> <input class="form-control text-1"
                                                id="headerSearch" name="q" type="search" value=""
                                                placeholder="Search..."> <button class="btn" type="submit"
                                                aria-label="Search"> <i class="fas fa-search header-nav-top-icon"></i>
                                            </button> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .ipopup {
        position: fixed;
        top: 50%;
        /* Center vertically by default */
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 0px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        height: 400px;
        width: 500px;
        max-width: 100%;
        /* Prevents overflow */
        max-height: 100%;
        /* Prevents overflow */
        overflow: auto;
        /* Scroll if content overflows */
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    /* Close button styling */
    #iclose {
        background: none;
        border: none;
        font-size: 1.5rem;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    /* Adjust for screens 768px and below */
    @media (max-width: 768px) {
        .ipopup {
            width: 90%;
            top: 20%;
            /* Center closer to the top */
            transform: translate(-50%, 0);
            /* Remove vertical centering */
            height: auto;
            /* Adjust height */
        }

        .img-fluid {
            width: 100%;
            height: auto;
            /* Responsive image */
        }
    }

    /* Adjust for screens 576px and below */
    @media (max-width: 576px) {
        .ipopup {
            width: 95%;
            /* Full width on smaller screens */
            top: 10%;
            /* Higher positioning */
            transform: translate(-50%, 0);
            /* Center horizontally only */
            padding: 10px;
            height: auto;
            /* Dynamic height */
        }

        #iclose {
            font-size: 1.2rem;
        }
    }
</style>


<!-- Book popup -->
<div id="overlay" style="display: none;">
    <di class="col-md-6 col-sm-12 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
        <div id="popup" class="ipopup">
            <button id="iclose">&times;</button>
            <h4 class="modal-title" id="defaultModalLabel"><strong>The Great Return</strong></h4>
            <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('img/gallery/gallery-2.png') }}" href="https://a.co/d/f5xmi3p" style="height: 275px; width: 230px;" alt=""> <br>
            <a class="align-items-center" href="https://a.co/d/bg4dL5s" style="font-size: large;">Grab a copy on Amazon now <span class="social-icons-amazon">
                    <a href="https://a.co/d/bg4dL5s" target="_blank" title="amazon"><i class="fab fa-amazon"></i></a>
                </span> </a>
        </div>
    </di>
</div>

<script>
    // book popup script here
    document.addEventListener("DOMContentLoaded", function() {
        var show_delay = 0; // Show immediately on page load
        var hide_delay = 30000; // Hide after 30 seconds
        setTimeout(function() {
            document.getElementById('overlay').style.display = 'block';
        }, show_delay);
        // Hide the popup after the specified duration
        setTimeout(function() {
            document.getElementById('overlay').style.display = 'none';
        }, show_delay + hide_delay);
        // Close button functionality
        document.getElementById('iclose').onclick = function() {
            document.getElementById('overlay').style.display = 'none';
        };
    });
</script>

<div id="overlay" style="display: none; /* Your overlay styles */">
    <button id="iclose">Close</button>
</div>