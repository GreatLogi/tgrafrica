<!DOCTYPE html>
<html lang="en"
    data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="keywords" content="TGR Africa, The Great Return, Wan Tech Solutions Co. Ltd." />
    <meta name="description" content="TGR Africa, The Great Return, Wan Tech Solutions Co. Ltd.">
    <meta name="Wan Tech Solutions Co.Ltd." content="wantechsolutions">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap"
        rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS -->

    <!-- Dashboard MIX  -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- End of Dashboard MIX -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">
    <link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/default.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-42715764-11');
    </script>
</head>


{
<!-- <style>
    .modal-body {
        background-color: #fff;
        border-radius: 8px;
        width: 90%;
        max-width: 600px;
        /* Set max width for larger screens */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease;
        justify-content: space-between;
        align-items: center;
    }

    #prospertousModal {
        background-color: #fff;
        border-radius: 8px;
        width: 90%;
        max-width: 600px;
        /* Set max width for larger screens */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header {
        padding: 16px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-body {
        padding: 16px;
    }

    .modal-footer {
        padding: 16px;
        border-top: 1px solid #eee;
        display: flex;
        justify-content: flex-end;
    }

    .close-button {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .action-button:hover {
        background-color: #0056b3;
    }
</style> -->
}

<body data-plugin-page-transition>
    <div class="body">
        @include('website.layouts.header')
        <div role="main" class="main">
            @yield('content')
        </div>
        <div class="modal fade" id="prospertousModal" tabindex="-1" aria-labelledby="prospertousModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="prospertousModalLabel">Enter Your Email address to receive the
                            Investors Community Prospectus PDF.</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="prospertousForm" action="{{ route('prospertous.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="emailInput"
                                    placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary">Receive</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>PROSPECTUS SENT TO YOUR EMAIL SUCCESSFULLY</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @include('website.layouts.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Show success modal if session contains 'success' message
            @if (session('success'))
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            @endif
        });
    </script>

    {{-- <script>
        document.getElementById('prospertousForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch('{{ route('prospertous.store') }}', {
    method: 'POST',
    body: formData,
    headers: {
    'X-CSRF-TOKEN': '{{ csrf_token() }}'}
    })
    .then(response => response.json())
    .then(data => {
    alert(data.message);
    $('#prospertousModal').modal('hide');
    })
    .catch(error => console.error('Error:', error));
    });
    </script> --}}

    <style>
        /* Whatsapp */
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 50%;
            right: 10px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            /* box-shadow: 2px 2px 3px #ff7e7e; */
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        /* End of whatsapp */
    </style>
    <!-- Whatsapp Button -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+233209398306&text=Welcome to TGR Africa Official WhatsApp Platform."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- End of whatsapp Button -->
    <!-- Vendor -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/views/view.contact.js') }}"></script>
    <script src="{{ asset('js/theme.init.js') }}"></script>
    <!-- Google Maps -->
    <script>
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
                d[l](f, ...n))
        })
        ({
            key: "AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg",
            v: "weekly"
        });
        async function initMap() {
            const {
                Map,
                InfoWindow
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerElement,
                PinElement
            } = await google.maps.importLibrary(
                "marker",
            );
            const map = new Map(document.getElementById("googlemaps"), {
                zoom: 14,
                center: {
                    lat: -37.817240,
                    lng: 144.955820
                },
                mapId: "bacc27c8c034b32e",
            });
            const markers = [{
                position: {
                    lat: -37.817240,
                    lng: 144.955820
                },
                title: "Office 1<br>Melbourne, 121 King St, Australia<br>Phone: 123-456-1234",
            }];
            const infoWindow = new InfoWindow();
            markers.forEach(({
                position,
                title
            }, i) => {
                const pin = new PinElement({
                    background: "#e36159",
                    borderColor: "#e36159",
                    glyphColor: "#FFF",
                });
                const marker = new AdvancedMarkerElement({
                    position,
                    map,
                    title: `${title}`,
                    content: pin.element,
                });
                marker.addListener("click", ({
                    domEvent,
                    latLng
                }) => {
                    const {
                        target
                    } = domEvent;
                    infoWindow.close();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });
        }
        initMap();
    </script>
</body>

</html>
