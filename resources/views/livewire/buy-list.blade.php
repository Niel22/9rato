<div>
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>All Buy Products</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Buys</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-custom-3">
                    <div class="left-box wow fadeInUp">
                        <div class="shop-left-sidebar">

                            <div class="back-button">
                            <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                            </div>

                            <div class="accordion custom-accordion" id="accordionExample">

                            <!-- Bid Categories -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <span>Product Categories</span>
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="search" class="form-control" id="search" placeholder="Search categories...">
                                    <label for="search">Search</label>
                                    </div>
                                    <ul class="category-list custom-padding custom-height">
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="electronics">
                                        <label class="form-check-label" for="electronics">
                                            <span class="name">Electronics</span>
                                            <span class="number">(23)</span>
                                        </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="vehicles">
                                        <label class="form-check-label" for="vehicles">
                                            <span class="name">Vehicles</span>
                                            <span class="number">(15)</span>
                                        </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                        <input class="checkbox_animated" type="checkbox" id="art">
                                        <label class="form-check-label" for="art">
                                            <span class="name">Art</span>
                                            <span class="number">(8)</span>
                                        </label>
                                        </div>
                                    </li>
                                    <!-- add more as needed -->
                                    </ul>
                                </div>
                                </div>
                            </div>


                            <!-- Price Range -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <span>Price</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div class="range-slider">
                                            <input type="text" class="js-range-slider irs-hidden-input" value="" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                        </div>

                </div>

                <div class="col-custom-">
                    <div class="banner-contain-2 hover-effect bg-size blur-up lazyloaded" style="background-image: url('{{ asset('assets/images/hero/home-slider2.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                        <img src="{{ asset('assets/images/hero/home-slider2.jpg') }}" class="bg-img rounded-3 blur-up lazyloaded" alt="Bid Products Banner" style="display: none;">
                        <div class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                            <div>
                                <h2>Explore Exciting Oportunities to buy your dream products</h2>
                                <h3>Search your best offer & win exclusive products!</h3>
                            </div>
                        </div>
                    </div>

                    <div class="show-button">
                        <div class="filter-button-group">
                            <div class="filter-button d-inline-block d-lg-none">
                                <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                            </div>
                        </div>

                        <div class="top-filter-menu">
                            <div class="category-dropdown">
                                <h5 class="text-content">Sort By :</h5>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                        <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="pop" href="javascript:void(0)">Popularity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                                Rating</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="off" href="javascript:void(0)">% Off - Hight To
                                                Low</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-xxl-3 col-lg-4 col-sm-5 col-6">
                            <div class="product-theme-box">
                                <div class="img-box ratio_50">
                                    <a href="{{ route('product.buy') }}" style="height: 200px">
                                        <img src="assets/images/products/p1.jpg" class="bg-img">
                                    </a>
                                    <a href="#!" class="heart-icon">
                                        <i data-feather="heart"></i>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="top-content">
                                        <a href="{{ route('product.buy') }}">
                                            <h5>Mido - Musical app</h5>
                                        </a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>by <a href="#!"> Hooli</a> in <a href="#!">Music</a></h6>

                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <div>
                                            <span>150 Sales</span>
                                            <h5 class="price">₦36.00</h5>
                                        </div>
                                        <div class="btn-grp">
                                            <a class="btn" href="{{ route('product.buy') }}">buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-5 col-6">
                            <div class="product-theme-box">
                                <div class="img-box ratio_50">
                                    <a href="{{ route('product.buy') }}" style="height: 200px">
                                        <img src="assets/images/products/p2.jpg" class="bg-img">
                                    </a>
                                    <a href="#!" class="heart-icon">
                                        <i data-feather="heart"></i>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="top-content">
                                        <a href="{{ route('product.buy') }}">
                                            <h5>Criphin - Contemporary Business Keynote Template</h5>
                                        </a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>by <a href="#!"> Criphin</a> in <a href="#!">Graphics</a></h6>

                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <div>
                                            <span>168 Sales</span>
                                            <h5 class="price">₦52.00</h5>
                                        </div>
                                        <div class="btn-grp">
                                            <a class="btn" href="{{ route('product.buy') }}">buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-5 col-6">
                            <div class="product-theme-box">
                                <div class="img-box ratio_50">
                                    <a href="{{ route('product.buy') }}" style="height: 200px">
                                        <img src="assets/images/products/p3.jpg" class="bg-img">
                                    </a>
                                    <a href="#!" class="heart-icon">
                                        <i data-feather="heart"></i>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="top-content">
                                        <a href="{{ route('product.buy') }}">
                                            <h5>Maxico - Kids Happiness</h5>
                                        </a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>by <a href="#!"> Maxico</a> in <a href="#!">HTML</a></h6>

                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <div>
                                            <span>36 Sales</span>
                                            <h5 class="price">₦54.00</h5>
                                        </div>
                                        <div class="btn-grp">
                                            <a class="btn" href="{{ route('product.buy') }}">buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-5 col-6">
                            <div class="product-theme-box">
                                <div class="img-box ratio_50">
                                    <a href="{{ route('product.buy') }}" style="height: 200px">
                                        <img src="assets/images/products/p1.jpg" class="bg-img">
                                    </a>
                                    <a href="#!" class="heart-icon">
                                        <i data-feather="heart"></i>
                                    </a>
                                </div>
                                <div class="content-box">
                                    <div class="top-content">
                                        <a href="{{ route('product.buy') }}">
                                            <h5>Real Paint FX - Photoshop Add-On</h5>
                                        </a>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>by <a href="#!"> pictureEdit</a> in <a href="#!">Photo Effect</a></h6>
                                            
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <div>
                                            <span>20 Sales</span>
                                            <h5 class="price">₦68.00</h5>
                                        </div>
                                        <div class="btn-grp">
                                            <a class="btn" href="{{ route('product.buy') }}">buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="custom-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>
