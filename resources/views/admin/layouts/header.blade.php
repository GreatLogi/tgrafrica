@unless (request()->is('contact-us'))
    <!-- Google Analytics Script -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-42715764-8');
    </script>
@endunless
<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .notification-bell {
        position: relative;
        display: flex;
        align-items: center;
        margin-right: 20px;
        /* Space between bell and profile */
    }

    .notification-bell a {
        color: #333;
        font-size: 24px;
        text-decoration: none;
        position: relative;
    }

    .notification-count {
        position: absolute;
        top: -5px;
        right: -10px;
        background: #dc3545;
        color: #fff;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 12px;
        font-weight: bold;
    }

    .header-right {
        display: flex;
        align-items: center;
    }

    .userbox {
        display: flex;
        align-items: center;
    }

    .userbox img {
        border-radius: 50%;
        margin-right: 10px;
        /* Space between profile picture and text */
    }

    .profile-info {
        margin-right: 10px;
        /* Space between profile info and dropdown arrow */
    }

   < /*Newly added adjustment*/
    /* General Header Styling */
#header {
    width: 100%;
    z-index: 1000;
    transition: all 0.3s ease;
}

/* Mobile adjustments for small screens */
@media (max-width: 768px) {
    #header {
        position: relative;
        height: auto;
        top: 0;
    }

    .header-nav-main nav ul#mainNav {
        flex-direction: column; /* Stack nav items vertically */
        padding: 0;
    }

    .header-logo img {
        width: 80px; /* Adjust logo size for smaller screens */
    }

    .header-nav-features {
        display: none; /* Hide search icon to save space */
    }

    /* Adjust padding and margins to avoid overflow */
    .header-body {
        padding: 10px;
    }

    .header-column {
        flex: 1 1 100%;
    }
}

/* Tablet adjustments */
@media (min-width: 769px) and (max-width: 1024px) {
    #header {
        height: auto;
        position: relative;
        top: 0;
    }

    .header-nav-main nav ul#mainNav {
        justify-content: space-around;
    }

    .header-logo img {
        width: 100px; /* Adjust logo size */
    }

    .dropdown-menu {
        max-height: 200px; /* Set a max height */
        overflow-y: auto;  /* Add vertical scroll */
    }
}


</style>

<div class="logo-container">
    <a href="" class="logo">
        <img src="{{ asset('img/logo-default-slim.png') }}" class="logo-image" width="120" height="60"
            alt="TGR Admin" />
        <!-- <img src="{{ asset('img/logo-default-slim.png') }}" class="logo-image-mobile" width="90" height="41" alt="TGR Admin" /> -->
    </a>
    <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse" data-bs-target=".header-nav">
        <i class="fas fa-bars"></i>
    </button>
    <div class="header-nav collapse">
        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
            <nav>
                <ul class="nav nav-pills" id="mainNav">
                    <li>
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@php
    $user = Auth::user();
    // Query to get the count of users with status 0
    $inactiveUserCount = \App\Models\User::where('status', 0)->count();
@endphp

<div class="header-right">
    @role('superadmin')
        @if ($inactiveUserCount > 0)
            <div class="notification-bell">
                <a href="{{ route('users-subscribed-semiars') }}" data-bs-toggle="tooltip" title="Inactive Users">
                    <i class="fas fa-bell"></i>
                    @if ($inactiveUserCount > 0)
                        <span class="notification-count">{{ $inactiveUserCount }}</span>
                    @endif
                </a>
            </div>
        @endif
    @endrole

    <div id="userbox" class="userbox">
        <a href="#" data-bs-toggle="dropdown">
            <img src="{{ !empty($user->profile_photo_path) ? asset($user->profile_photo_path) : asset('upload/user.jpeg') }}"
                alt="" class="img-radius" height="60px" width="50px">
            <div class="profile-info profile-info-no-role" data-lock-name="{{ $user->name }}"
                data-lock-email="{{ $user->email }}">
                <span class="name">Hi, <strong
                        class="font-weight-semibold">{{ $user ? $user->name : 'Guest' }}</strong></span>
            </div>
            <i class="fas fa-chevron-down text-color-dark"></i>
        </a>

        <button onclick="toggleTheme()">Change Theme</button>


        <div class="dropdown-menu">
            <ul class="list-unstyled">
                <li>
                    <a role="menuitem" tabindex="-1" href="#"><i class="bx bx-user"></i> My
                        Profile</a>
                </li>
                <li>
                    <a role="menuitem" tabindex="-1" href="{{ route('logout') }}">
                        <i class="bx bx-log-out"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
