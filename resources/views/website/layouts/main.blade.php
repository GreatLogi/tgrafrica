<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true}">
	
<!-- Mirrored from www.okler.net/previews/porto/10.2.0/index-corporate-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 14:34:54 GMT -->
<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title')</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->		
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">		<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">		<link rel="stylesheet" href="{{asset('vendor/animate/animate.compat.css')}}">		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Skin CSS -->		<link id="skinCSS" rel="stylesheet" href="{{asset('css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-42715764-11');
		</script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
			@include('layouts.header')

			<div role="main" class="main">

			@yield('content')
			</div>

			@include('layouts.footer')
		</div>

		

		<!-- Vendor -->		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('vendor/plugins/js/plugins.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('js/views/view.contact.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>

	<!-- Google Maps -->
		<script>

			/* 
			Map Markers:
			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
			*/
			(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
				({key: "AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg", v: "weekly"});

			async function initMap() {
				const { Map, InfoWindow } = await google.maps.importLibrary("maps");
				const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
					"marker",
				);
				const map = new Map(document.getElementById("googlemaps"), {
					zoom: 14,
					center: { lat: -37.817240, lng: 144.955820 },
					mapId: "bacc27c8c034b32e",
				});
				const markers = [
					{
						position: { lat: -37.817240, lng: 144.955820 },
						title: "Office 1<br>Melbourne, 121 King St, Australia<br>Phone: 123-456-1234",
					}
				];

				const infoWindow = new InfoWindow();

				markers.forEach(({ position, title }, i) => {
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

					marker.addListener("click", ({ domEvent, latLng }) => {
						const { target } = domEvent;

						infoWindow.close();
						infoWindow.setContent(marker.title);
						infoWindow.open(marker.map, marker);
					});
				});	

			}

			initMap();	

		</script>

	</body>

<!-- Mirrored from www.okler.net/previews/porto/10.2.0/index-corporate-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2024 14:34:55 GMT -->
</html>
