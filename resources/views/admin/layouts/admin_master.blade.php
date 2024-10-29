<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half" data-style-switcher-options="{'changeLogo': false}"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ config('app.name') }}" name="description" />
    <meta content="{{ config('app.name') }}" name="author" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet"
        type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/datatables/media/css/dataTables.bootstrap5.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/dashmix.min.css') }}" />
    <!-- Theme Layout -->
    <link rel="stylesheet" href="{{ asset('backend/css/layouts/modern.css') }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('backend/vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('master/style-switcher/style.switcher.localstorage.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href=" https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>

<body>
    <section class="body">
        @include('admin.layouts.header')
        <div class="inner-wrapper">
            @include('admin.layouts.nav')
            <section role="main" class="content-body content-body-modern">
                @yield('admin')
            </section>
        </div>
        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close d-md-none">
                        Collapse <i class="fas fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2021-04-19T00:00+00:00">04/19/2021</time>
                                    <span>Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Upcomming Consultations</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Clement Mahama</span>
                                        <span class="title"> Consultation is due on ; Date, Time</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Isaac Totimeh</span>
                                        <span class="title">Consultation is due on ; Date, Time</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="
    https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="
    https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="
    https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="

    https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="
    https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

    <script src="{{ asset('backend/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('master/style-switcher/style.switcher.js') }}"></script>
    <script src="{{ asset('backend/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('backend/vendor/common/common.js') }}"></script>
    <script src="{{ asset('backend/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('backend/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('backend/vendor/raphael/raphael.js') }}"></script>
    <script src="{{ asset('backend/vendor/morris/morris.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/code.js') }}"></script>
    <script src="{{ asset('backend/js/theme.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    <script src="{{ asset('backend/js/theme.init.js') }}"></script>
    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
    <script src="{{ asset('backend/vendor/chart.js-master/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/widget-charts2.js') }}"></script>



    <!-- Specific Page Vendor -->
    <script src="{{ asset('backend/vendor/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('backend/vendor/raphael/raphael.js') }}"></script>
    <script src="{{ asset('backend/vendor/morris/morris.js') }}"></script>
    <script src="{{ asset('backend/vendor/gauge/gauge.js') }}"></script>
    <script src="{{ asset('backend/vendor/snap.svg/snap.svg.js') }}"></script>
    <script src="{{ asset('backend/vendor/liquid-meter/liquid.meter.js') }}"></script>
    <script src="{{ asset('backend/vendor/chartist/chartist.js') }}"></script>


    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>


    <script src="{{ asset('backend/js/examples/examples.charts.js') }}"></script>
    <style>
        #ChartistCSSAnimation .ct-series.ct-series-a .ct-line {
            fill: none;
            stroke-width: 4px;
            stroke-dasharray: 5px;
            -webkit-animation: dashoffset 1s linear infinite;
            -moz-animation: dashoffset 1s linear infinite;
            animation: dashoffset 1s linear infinite;
        }

        #ChartistCSSAnimation .ct-series.ct-series-b .ct-point {
            -webkit-animation: bouncing-stroke 0.5s ease infinite;
            -moz-animation: bouncing-stroke 0.5s ease infinite;
            animation: bouncing-stroke 0.5s ease infinite;
        }

        #ChartistCSSAnimation .ct-series.ct-series-b .ct-line {
            fill: none;
            stroke-width: 3px;
        }

        #ChartistCSSAnimation .ct-series.ct-series-c .ct-point {
            -webkit-animation: exploding-stroke 1s ease-out infinite;
            -moz-animation: exploding-stroke 1s ease-out infinite;
            animation: exploding-stroke 1s ease-out infinite;
        }

        #ChartistCSSAnimation .ct-series.ct-series-c .ct-line {
            fill: none;
            stroke-width: 2px;
            stroke-dasharray: 40px 3px;
        }

        @-webkit-keyframes dashoffset {
            0% {
                stroke-dashoffset: 0px;
            }

            100% {
                stroke-dashoffset: -20px;
            }

            ;
        }

        @-moz-keyframes dashoffset {
            0% {
                stroke-dashoffset: 0px;
            }

            100% {
                stroke-dashoffset: -20px;
            }

            ;
        }

        @keyframes dashoffset {
            0% {
                stroke-dashoffset: 0px;
            }

            100% {
                stroke-dashoffset: -20px;
            }

            ;
        }

        @-webkit-keyframes bouncing-stroke {
            0% {
                stroke-width: 5px;
            }

            50% {
                stroke-width: 10px;
            }

            100% {
                stroke-width: 5px;
            }

            ;
        }

        @-moz-keyframes bouncing-stroke {
            0% {
                stroke-width: 5px;
            }

            50% {
                stroke-width: 10px;
            }

            100% {
                stroke-width: 5px;
            }

            ;
        }

        @keyframes bouncing-stroke {
            0% {
                stroke-width: 5px;
            }

            50% {
                stroke-width: 10px;
            }

            100% {
                stroke-width: 5px;
            }

            ;
        }

        @-webkit-keyframes exploding-stroke {
            0% {
                stroke-width: 2px;
                opacity: 1;
            }

            100% {
                stroke-width: 20px;
                opacity: 0;
            }

            ;
        }

        @-moz-keyframes exploding-stroke {
            0% {
                stroke-width: 2px;
                opacity: 1;
            }

            100% {
                stroke-width: 20px;
                opacity: 0;
            }

            ;
        }

        @keyframes exploding-stroke {
            0% {
                stroke-width: 2px;
                opacity: 1;
            }

            100% {
                stroke-width: 20px;
                opacity: 0;
            }

            ;
        }
    </style>

</body>

</html>
