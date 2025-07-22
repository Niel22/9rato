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
<div>
    <section class="section-404 section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="image-404">
                        <img src="{{ asset('assets/images/inner-page/404.png') }}" class="img-fluid blur-up lazyloaded" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="contain-404">
                        <h3 class="text-content">The page you are looking for could not be found. The link to this
                            address may be outdated or we may have moved the since you last bookmarked it.</h3>
                        <button onclick="location.href = '{{ route('home') }}';" class="btn btn-md text-white theme-bg-color mt-4 mx-auto">Back To Home Screen</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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