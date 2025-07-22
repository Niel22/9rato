<div>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Trade - Creamy Chocolate Cake</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
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
                        <!-- Product Name and Trade Info -->
                        <h6 class="offer-top">Trade Product</h6>
                        <h2 class="name">PlayStation 5 Console</h2>
                        <div class="price-rating">
                            <h3 class="theme-color price">Looking for: iPhone 13 Pro</h3>
                            <span class="current-swap theme-color">(Owner's Desired Trade)</span>
                        </div>

                        <!-- Product Description -->
                        <div class="product-contain">
                            <p>
                                The PlayStation 5 offers lightning-fast loading, deeper immersion with support for haptic feedback, adaptive triggers, 3D audio, and an all-new generation of incredible PlayStation games. Available for trade with an equivalent product.
                            </p>
                        </div>

                        <!-- Propose Trade Section -->
                        <div class="swap-box mt-4">
                            <div class="product-title">
                                <h4>Propose a Trade</h4>
                            </div>
                            <button data-bs-toggle="modal" data-bs-target="#proposeTradeModal" class="btn btn-md bg-dark text-white w-100">
                                Propose Trade
                            </button>
                            <small class="text-muted d-block mt-2">*You must have a listed product to propose a trade.</small>
                        </div>

                        <!-- Product Information -->
                        <div class="pickup-box mt-4">
                            <!-- More Information -->
                            <div class="product-title">
                                <h4>More Information</h4>
                            </div>
                            <div class="product-info">
                                <ul class="product-info-list">
                                    <li><strong>Condition:</strong> Like New</li>
                                    <li><strong>Category:</strong> Gaming Console</li>
                                    <li><strong>Status:</strong> <span class="text-success">Available</span></li>
                                    <li><strong>Tags:</strong> <a href="javascript:void(0)">Gaming</a>, <a href="javascript:void(0)">PlayStation</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Owner Information -->
                        <div class="pickup-box mt-4">
                            <div class="product-title">
                                <h4>Owner Information</h4>
                            </div>
                            <div class="pickup-detail">
                                <h4 class="text-content">
                                    <strong>Owner:</strong> Tech Enthusiast<br>
                                    <strong>Location:</strong> Lagos, Nigeria<br>
                                    <strong>Contact:</strong> <a href="mailto:techenthusiast@gmail.com">techenthusiast@gmail.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <div class="modal location-modal fade theme-modal" id="proposeTradeModal" tabindex="-1" aria-labelledby="proposeTradeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="proposeTradeModalLabel">Propose a Trade for <span id="modalProductName">[Product Name]</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <!-- Trade Completion Info -->
                    <div class="trade-completion-info">
                        <h5 class="modal-title">How This Trade Will Be Completed</h5>
                        <p class="mt-1 text-content">
                            After submitting your proposal:
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li>1. The owner of <span id="modalProductNameDetails">[Product Name]</span> will review your proposal.</li>
                            <li>2. If accepted, you'll both communicate to finalize the trade details.</li>
                            <li>3. Ensure you inspect products in person or through verified channels before exchanging.</li>
                            <li>4. You can negotiate additional cash payments or terms directly with the owner.</li>
                        </ul>
                        <p class="mt-3 text-danger">
                            Note: <strong>Trades are user-driven, and the platform is not responsible for disputes or item verification.</strong>
                        </p>
                    </div>

                    <!-- Trade Proposal Checklist -->
                    <div class="confirmation-list mt-4">
                        <h5 class="modal-title">Checklist Before Submitting</h5>
                        <p class="mt-1 text-content">Ensure the following:</p>
                        <ul class="list-unstyled mt-3">
                            <li>✔ Correct product selected for trade.</li>
                            <li>✔ Optional cash balance (if applicable) is accurate.</li>
                            <li>✔ Additional details clearly explain your offer.</li>
                            <li>✔ You agree to the trade terms and conditions.</li>
                        </ul>
                    </div>

                    <!-- Trade Proposal Details -->
                    <div class="purchase-details mt-4">
                        <h5 class="modal-title font-weight-bold">Your Proposal</h5>
                        <form id="proposeTradeForm">

                            <div class="mb-3">
                                <label for="userTradeProduct" class="form-label">Select Your Product to Trade</label>
                                <select class="form-select" id="userTradeProduct" name="userTradeProduct" required>
                                    <option value="" disabled selected>Choose your product</option>
                                    <!-- Dynamically filled options -->
                                    <option value="1">Used MacBook Pro 2018</option>
                                    <option value="2">Canon DSLR Camera</option>
                                    <option value="3">Road Bike</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="cashDifference" class="form-label">Additional Cash (Optional)</label>
                                <input type="number" class="form-control" id="cashDifference" name="cashDifference" min="0" step="0.01" placeholder="Enter extra cash if any">
                            </div>

                            <div class="mb-3">
                                <label for="additionalDetails" class="form-label">Additional Details</label>
                                <textarea class="form-control" id="additionalDetails" name="additionalDetails" rows="3" placeholder="Add extra info about your proposal"></textarea>
                            </div>

                        </form>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <button type="button" class="btn btn-sm bg-dark m-1 text-white" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="proposeTradeForm" class="btn btn-sm bg-success text-white">Submit Proposal</button>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <livewire:components.product_details.related_products />
</div>
