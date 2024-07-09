<header class="header header-nav-menu header-nav-links">
    <div class="logo-container">
        <a href="https://www.okler.net/previews/porto-admin/" class="logo">
            <img src="{{ asset('img/logo-default-slim.png') }}" class="logo-image" width="90" height="35"
                alt="Porto Admin" /><img src="{{ asset('img/logo-default-slim.png') }}" class="logo-image-mobile"
                width="90" height="41" alt="Porto Admin" />
        </a>
        <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse" data-bs-target=".header-nav">
            <i class="fas fa-bars"></i>
        </button>
        <!-- start: header nav menu -->
        <div class="header-nav collapse">
            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
                <nav>
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                            </ul>
                </nav>
            </div>
        </div>
        <!-- end: header nav menu -->
    </div>
    @php
        $user = Auth::user();
    @endphp
    <div class="header-right">
        <span class="separator"></span>
        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">
                {{-- <span class="profile-picture profile-picture-as-text">JD</span> --}}
                <img src="{{ !empty($editData->profile_photo_path) ? asset($editData->profile_photo_path) : asset('upload/user.jpeg') }}"
                    alt="" class="img-radius"height="60px" width="50px">
                <div class="profile-info profile-info-no-role" data-lock-name="John Doe"
                    data-lock-email="johndoe@okler.com">
                    <span class="name">Hi, <strong
                            class="font-weight-semibold">{{ $user ? $user->name : 'Guest' }}</strong></span>
                </div>
                <i class="fas fa-chevron-down text-color-dark"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user"></i>
                            My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('logout') }}">
                            <i class="bx bx-log-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
