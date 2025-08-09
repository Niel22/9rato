
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('user/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('user/images/favicon.png') }}" type="image/x-icon">
    <title>9Rato - Dashboard</title>

    <!-- Google font-->
    <link rel="stylesheet"
            href="{{ asset('assets/fonts.googleapis.com/css25af9.css') }}?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('user/css/linearicon.css') }}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vendors/font-awesome.css') }}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vendors/themify.css') }}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/ratio.css') }}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/remixicon.css') }}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vendors/feather-icon.css') }}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vendors/animate.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vendors/bootstrap.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/vector-map.css') }}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('user/css/vendors/slick.css') }}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <livewire:includes.user-header  />
        
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <livewire:includes.user-sidebar  />
            
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright {{ now()->format('Y') }} © 9Rato</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Logout Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                        <a href="{{ route('logout') }}" class="btn  btn--yes btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal End -->

    <!-- latest js -->
    <script src="{{ asset('user/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('user/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js -->
    <script src="{{ asset('user/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('user/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{ asset('user/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('user/js/scrollbar/custom.js') }}"></script>

    <!-- Sidebar jquery -->
    <script src="{{ asset('user/js/config.js') }}"></script>

    <!-- tooltip init js -->
    <script src="{{ asset('user/js/tooltip-init.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('user/js/sidebar-menu.js') }}"></script>
    {{-- <script src="{{ asset('user/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('user/js/notify/index.js') }}"></script> --}}

    <!-- Apexchar js -->
    <script src="{{ asset('user/js/chart/apex-chart/apex-chart1.js') }}"></script>
    <script src="{{ asset('user/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('user/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('user/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('user/js/chart/apex-chart/chart-custom1.js') }}"></script>


    <!-- slick slider js -->
    <script src="{{ asset('user/js/slick.min.js') }}"></script>
    <script src="{{ asset('user/js/custom-slick.js') }}"></script>

    <!-- customizer js -->
    {{-- <script src="{{ asset('user/js/customizer.js') }}"></script> --}}

    <!-- ratio js -->
    <script src="{{ asset('user/js/ratio.js') }}"></script>

    <!-- sidebar effect -->
    <script src="{{ asset('user/js/sidebareffect.js') }}"></script>

    <!-- Theme js -->
    <script src="{{ asset('user/js/script.js') }}"></script>
</body>


</html>