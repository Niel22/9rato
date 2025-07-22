<div>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Buy - Creamy Chocolate Cake</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active">Creamy Chocolate Cake</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-6">
                    <div class="product-left-box">
                        <div class="row g-sm-4 g-2">
                            <div class="col-6 col-grid-box wow fadeInUp">
                                <div class="slider-image">
                                    <img src="{{ asset('assets/images/products/p1.jpg') }}" id="img-1"
                                        data-zoom-image="{{ asset('assets/images/products/p1.jpg') }}" class="
                                                        img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                </div>
                            </div>

                            <div class="col-6 col-grid-box wow fadeInUp" data-wow-delay="0.05s">
                                <div class="slider-image">
                                    <img src="{{ asset('assets/images/products/p2.jpg') }}" id="img-2"
                                        data-zoom-image="{{ asset('assets/images/products/p2.jpg') }}" class="
                                                        img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                </div>
                            </div>

                            <div class="col-6 col-grid-box wow fadeInUp" data-wow-delay="0.1s">
                                <div class="slider-image">
                                    <img src="{{ asset('assets/images/products/p3.jpg') }}" id="img-3"
                                        data-zoom-image="{{ asset('assets/images/products/p3.jpg') }}" class="
                                                        img-fluid image_zoom_cls-2 blur-up lazyload" alt="">
                                </div>
                            </div>

                            <div class="col-6 col-grid-box wow fadeInUp" data-wow-delay="0.15s">
                                <div class="slider-image">
                                    <img src="{{ asset('assets/images/products/p1.jpg') }}" id="img-4"
                                        data-zoom-image="{{ asset('assets/images/products/p1.jpg') }}" class="
                                                        img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="right-box-contain p-sticky wow fadeInUp">
                        <!-- Section Header -->
                        <h6 class="offer-top">Buy Product</h6>
                        <h2 class="name">iPhone 14 Pro Max</h2>

                        <!-- Price Section -->
                        <div class="price-rating">
                            <h3 class="theme-color price">₦1200.00</h3>
                        </div>

                        <!-- Product Description -->
                        <div class="product-contain text-justify">
                            <p>
                                The iPhone 14 Pro Max is Apple’s flagship smartphone, offering a premium design and unmatched performance. It features a stunning 6.7-inch Super Retina XDR display with ProMotion technology for smoother scrolling and an always-on display for quick glances. 

                                The phone is powered by the advanced A16 Bionic chip, delivering incredible speed, efficiency, and performance for gaming, multitasking, and professional-grade tasks. The device is equipped with a 48MP triple-camera system that includes an ultra-wide, wide, and telephoto lens, allowing you to capture stunning photos and videos in any lighting condition. Night mode, cinematic mode, and ProRAW are supported for photography enthusiasts. 

                                This model includes 256GB of storage, providing ample space for your photos, videos, apps, and files. The phone is available in an elegant Space Grey color with a durable Ceramic Shield front and back, making it resistant to drops and scratches. It also supports 5G connectivity for blazing-fast internet speeds.

                                Additional features include Face ID for secure authentication, MagSafe compatibility for quick wireless charging, and water and dust resistance (IP68). The phone runs on iOS 16, offering an intuitive and seamless user experience.

                                The device is in brand-new condition, comes with all original accessories (charger, USB-C to Lightning cable, and documentation), and includes a 1-year manufacturer warranty. Perfect for gaming, photography, content creation, and everyday productivity.

                                Limited stock available – only 3 units left! Order now to experience the ultimate smartphone technology from Apple.
                            </p>
                        </div>

                        <!-- Product Details -->
                        <div class="pickup-box">
                            <div class="product-title">
                                <h4>More Information</h4>
                            </div>

                            <div class="product-info">
                                <ul class="product-info-list">
                                    <li><strong>Condition:</strong> New</li>
                                    <li><strong>Category:</strong> Smartphone</li>
                                    <li><strong>Status:</strong> <span class="text-success">Available</span></li>
                                    <li><strong>Tags:</strong> <a href="javascript:void(0)">Smartphone</a>, <a href="javascript:void(0)">Apple</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Seller Information -->
                        <div class="pickup-box">
                            <div class="product-title">
                                <h4>Seller Information</h4>
                            </div>

                            <div class="pickup-detail">
                                <h4 class="text-content">
                                    <strong>Seller:</strong> TechWorld Enterprises<br>
                                    <strong>Location:</strong> Lagos, Nigeria
                                </h4>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="note-box product-package">
                            <button data-bs-toggle="modal" data-bs-target="#buyNowModal" onclick="buyNow(1, 'iPhone 14 Pro Max', 1200.00)"
                                class="btn btn-md bg-dark cart-button text-white w-100">Buy Now</button>
                            <button onclick="chatWithSeller(1, 'TechWorld Enterprises')"
                                class="btn btn-md bg-success cart-button text-white w-100">Chat with Seller</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <div class="modal location-modal fade theme-modal" id="buyNowModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Buying Of Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="confirmation-list">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm the Following Before Proceeding</h5>
                        <p class="mt-1 text-content">Ensure you review the following details before completing your purchase:</p>
                        <ul class="list-unstyled mt-3">
                            <li>✔ Product Name and Description are accurate.</li>
                            <li>✔ Delivery address is correct.</li>
                            <li>✔ Total price matches your expectation.</li>
                            <li>✔ Wallet balance is sufficient for the purchase.</li>
                            <li>✔ You agree to the escrow terms for the transaction.</li>
                        </ul>
                    </div>

                    <!-- Purchase Confirmation Section -->
                    <div class="purchase-details mt-4">
                        <h5 class="modal-title font-weight-bold">Purchase Confirmation</h5>
                        <ul class="list-unstyled mt-3">
                            <li><strong>Product Name:</strong> iPhone 14 Pro Max</li>
                            <li><strong>Product Price:</strong> ₦1200.00</li>
                            <li><strong>Current Wallet Balance:</strong> ₦1500.00</li>
                            <li><strong>Wallet Balance After Purchase:</strong> ₦300.00</li>
                        </ul>
                    </div>

                    <!-- Escrow Note -->
                    <div class="escrow-note mt-3">
                        <p class="text-muted">
                            The amount will be held in escrow until the transaction is completed. Once you confirm the receipt of the product, the funds will be released to the seller.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-sm bg-dark m-1 text-white" data-bs-dismiss="modal">Cancel</button>
                        <a href="" class="btn btn-sm text-white bg-success">Confirm Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <livewire:components.product_details.related_products />
</div>
