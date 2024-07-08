<!doctype html>
<html class="fixed">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="TGR-ADMIN" />
    <meta name="description" content="TGR-ADMIN">
    <meta name="author" content="TGR-ADMIN">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('master/style-switcher/style.switcher.localstorage.js') }}"></script>
</head>

<body>
    <section class="body-sign">
        <div class="center-sign">
            <a href="#" class="logo float-left">
                <img src="{{ asset('img/logo-default-slim.png') }}" height="100" alt="Porto Admin" />
            </a>
            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i
                            class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign In</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('login-user') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input id="email" name="email" type="email" :value="old('email')" required
                                    autofocus class="form-control form-control-lg" autocomplete="email" />
                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label for="password" class="float-left">Password</label>
                                <a href="pages-recover-password.html" class="float-end">Lost Password?</a>
                            </div>
                            <div class="input-group">
                                <input id="password" name="password" type="password"
                                    class="form-control form-control-lg" autocomplete="current-password" />
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                            </div>
                            <div class="col-sm-4 text-end">
                                <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2024. All Rights Reserved.</p>
        </div>
    </section>
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('master/style-switcher/style.switcher.js') }}"></script>
    <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/common/common.js') }}"></script>
    <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/theme.init.js') }}"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-42715764-8', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
