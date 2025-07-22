<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('assets/images/Frame.svg') }}" type="image/x-icon">     
        <title>9rato</title>

        <link rel="preconnect" href="{{asset('assets/fonts.gstatic.com/index.html')}}">
        <link rel="stylesheet"
            href="{{ asset('assets/fonts.googleapis.com/css25af9.css') }}?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

        <!-- bootstrap css -->
        <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

        <!-- wow css -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

        <!-- Iconly css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bulk-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">

        <!-- Template css -->
        <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <!-- Include Feather Icons CDN -->
        <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">


    </head>
    <body class="bg-effect">
        {{-- <div class="fullpage-loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div> --}}
        <livewire:includes.header  />
        <!-- mobile fix menu start -->
        <livewire:includes.mobile  />
        
        <!-- mobile fix menu end -->
        {{ $slot }}

        <livewire:includes.footer />
    
        <livewire:includes.location-modal />

        <!-- Cookie Bar Box Start -->
        {{-- <div class="cookie-bar-box">
            <div class="cookie-box">
                <div class="cookie-image">
                    <img src="{{ asset('assets/images/cookie-bar.png') }}" class="blur-up lazyload" alt="">
                    <h2>Cookies!</h2>
                </div>

                <div class="cookie-contain">
                    <h5 class="text-content">We use cookies to make your experience better</h5>
                </div>
            </div>

            <div class="button-group">
                <button class="btn privacy-button">Privacy Policy</button>
                <button class="btn ok-button">OK</button>
            </div>
        </div> --}}
        <!-- Cookie Bar Box End -->

        <!-- Tap to top and theme setting button start -->
        <div class="theme-option">
            <div class="back-to-top">
                <a id="back-to-top" href="#">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <!-- Tap to top and theme setting button end -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/custom_slick.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('assets/js/auto-height.js') }}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('assets/js/timer1.js') }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('assets/js/quantity-2.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-wow.js') }}"></script>

    <script src="{{ asset('assets/js/filter-sidebar.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- theme setting js -->
    <script src="{{ asset('assets/js/theme-setting.js') }}"></script>
    <script>
        feather.replace();
    </script>

    </body>
</html>
