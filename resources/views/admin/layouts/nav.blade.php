<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <li class="nav-group-label">Site Configuration</li>

                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cube" aria-hidden="true"></i>
                            <span>CONTACT US</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent">
                                <a class="nav-link" href="{{ route('contact-us') }}">
                                    - Contact Us Summary <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cube" aria-hidden="true"></i>
                            <span>ADVISORY</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - TGRBRAINSTORM <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-tgrbrainstorm') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('tgr-brainstorm-add') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - TGRANALYSTICS <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-vision') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('site-vision') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - TGRSEMINAR <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-mission') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('site-mission') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cube" aria-hidden="true"></i>
                            <span>ABOUT US</span>
                        </a>
                        <ul class="nav nav-children">

                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - Founder <span class="mega-sub-nav-toggle toggled float-end" data-toggle="collapse"
                                        data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-founder') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('founder-profile') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - Vision <span class="mega-sub-nav-toggle toggled float-end" data-toggle="collapse"
                                        data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-vision') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('site-vision') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - Mission <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-mission') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('site-mission') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - Purpose <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('site-index-purpose') }}">
                                            - Record
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('site-purpose') }}">
                                            - Add Record
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-group-label">APPs</li>

                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cube" aria-hidden="true"></i>
                            <span>SYSTEM SETTINGS</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    - Settings <span class="mega-sub-nav-toggle toggled float-end"
                                        data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('index-roles') }}">
                                            - Roles
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('profileview') }}">
                                            - Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-line-icons.html">
                                            - Password Update
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('index-user') }}">
                                            - User Account
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-box-icons.html">
                                            - Audit Trail
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="ui-elements-icons-box-icons.html">
                                            - User Log Activities
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>
</aside>
