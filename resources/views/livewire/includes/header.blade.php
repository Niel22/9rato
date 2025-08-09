<header class="pb-md-4 pb-0">
        <div class="header-top">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-3 d-xxl-block d-none">
                        <div class="top-left-header">
                            <i class="iconly-Location icli text-white"></i>
                            <span class="text-white">1418 Riverwood Drive, CA 96052, US</span>
                        </div>
                    </div>

                    <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                        <div class="header-offer">
                            <div class="notification-slider">
                                <!-- Welcome Notification -->
                                <div>
                                    <div class="timer-notification">
                                        <h6><strong class="me-1">Welcome to 9rato!</strong>
                                            Discover amazing opportunities to sell, trade, swap, or bid every day.<strong class="ms-1">
                                            Your gateway to smarter deals.</strong>
                                        </h6>
                                    </div>
                                </div>

                                <!-- Promotion Notification -->
                                <div>
                                    <div class="timer-notification">
                                        <h6>Your next great trade is here!
                                            <a href="shop-left-sidebar.html" class="text-white">Explore Now!</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <ul class="about-list right-nav-about">
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                    <button class="btn dropdown-toggle" type="button" id="select-language"
                                        data-bs-toggle="dropdown">
                                        <img src="assets/images/country/united-states.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                        <span>English</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="english">
                                                <img src="assets/images/country/united-kingdom.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="france">
                                                <img src="assets/images/country/germany.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Germany</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)" id="chinese">
                                                <img src="assets/images/country/turkish.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Turki</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="right-nav-list">
                                <div class="dropdown theme-form-select">
                                    <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                        data-bs-toggle="dropdown">
                                        <span>USD</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="aud" href="javascript:void(0)">AUD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="eur" href="javascript:void(0)">EUR</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="cny" href="javascript:void(0)">CNY</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="{{ route('home') }}" class="web-logo nav-logo" style="font-size: 40px; font-weight: bold;">
                                <img src="{{ asset('assets/images/Frame.svg') }}" style="width: 40px" class="img-fluid blur-up lazyload" alt="">rato
                            </a>

                            <div class="middle-box">
                                <div class="location-box">
                                    <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                        <span class="locat-name">Your Location</span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </div>

                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="I'm searching for...">
                                        <button class="btn search-button-2" type="button" id="button-addon2">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <a href="contact-us.html" class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="phone-call"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>24/7 Support</h6>
                                                <h5>+91 888 104 2340</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="right-side">
                                        <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                @auth
                                                    <h5>{{ Auth::user()->name }}</h5>
                                                @endauth

                                                @guest
                                                    <h5>Guest</h5>
                                                @endguest
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                @guest
                                                    <li class="product-box-contain">
                                                        <i></i>
                                                        <a href="{{ route('login') }}">Log In</a>
                                                    </li>

                                                    <li class="product-box-contain">
                                                        <a href="{{ route('register') }}">Register</a>
                                                    </li>
                                                @endguest

                                                @auth
                                                    <li class="product-box-contain">
                                                        <a href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="product-box-contain">
                                                        <a href="{{ route('login') }}">Profile</a>
                                                    </li>
                                                    <li class="product-box-contain">
                                                        <a class="text-danger" href="{{ route('logout') }}">Logout</a>
                                                    </li>
                                                @endauth
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">
                        <div class="header-nav-left">
                            <button class="dropdown-category">
                                <i data-feather="align-left"></i>
                                <span>All Categories</span>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <ul class="category-list">
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Electronics</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Clothing & Accessories</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Books & Media</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Furniture</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Home Appliances</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Sports Equipment</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Toys & Games</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Health & Beauty</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Automobiles</h6>
                                        </a>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Real Estate</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('home') }}"
                                                    >Home</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('buy') }}"
                                                    >Buy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('swap') }}"
                                                    >Swaps</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('trade') }}"
                                                    >Trades</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('rent') }}"
                                                    >Rents</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('bids') }}"
                                                    >Bid</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-nav-right">
                            <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                                <i data-feather="zap"></i>
                                <span>Deal Today</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>