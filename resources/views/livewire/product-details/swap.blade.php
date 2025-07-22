<div>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Awap - Creamy Chocolate Cake</h2>
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
                        <!-- Product Name and Swap Info -->
                        <h6 class="offer-top">Swap Product</h6>
                        <h2 class="name">Samsung Galaxy S23 Ultra</h2>
                        <div class="price-rating">
                            <h3 class="theme-color price">Looking for: Gaming Laptop</h3>
                            <span class="current-swap theme-color">(Owner's Desired Swap)</span>
                        </div>

                        <!-- Product Description -->
                        <div class="product-contain">
                            <p>
                                The Samsung Galaxy S23 Ultra features a 6.8-inch Dynamic AMOLED display, 200MP camera, and Snapdragon 8 Gen 2 processor. Available for swap with an equivalent value product.
                            </p>
                        </div>

                        <!-- Propose Swap Section -->
                        <div class="swap-box mt-4">
                            <div class="product-title">
                                <h4>Propose a Swap</h4>
                            </div>
                            <button data-bs-toggle="modal" data-bs-target="#proposeSwapModal" class="btn btn-md bg-dark text-white w-100">
                                Propose Swap
                            </button>
                            <small class="text-muted d-block mt-2">*You must have a listed product to propose a swap.</small>
                        </div>

                        <!-- Product Information -->
                        <div class="pickup-box mt-4">
                            <!-- More Information -->
                            <div class="product-title">
                                <h4>More Information</h4>
                            </div>
                            <div class="product-info">
                                <ul class="product-info-list">
                                    <li><strong>Condition:</strong> New</li>
                                    <li><strong>Category:</strong> Smartphone</li>
                                    <li><strong>Status:</strong> <span class="text-success">Available</span></li>
                                    <li><strong>Tags:</strong> <a href="javascript:void(0)">Smartphone</a>, <a href="javascript:void(0)">Samsung</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Seller Information -->
                        <div class="pickup-box mt-4">
                            <div class="product-title">
                                <h4>Owner Information</h4>
                            </div>
                            <div class="pickup-detail">
                                <h4 class="text-content">
                                    <strong>Owner:</strong> Galaxy Tech Store<br>
                                    <strong>Location:</strong> Abuja, Nigeria<br>
                                    <strong>Contact:</strong> <a href="mailto:support@galaxytech.com">support@galaxytech.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12">
                    <div class="product-section-box">
                        <!-- Tabs Navigation -->
                        <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                            <li class="nav-item active" role="presentation">
                                <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                    type="button" role="tab">Swap Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history"
                                    type="button" role="tab">Swap History</button>
                            </li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="tab-content custom-tab" id="myTabContent">

                            <!-- Swap Details Tab -->
                            <div class="tab-pane fade show active" id="details" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <tbody>
                                            <tr>
                                                <td><strong>Product Name</strong></td>
                                                <td>Samsung Galaxy S23 Ultra</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Description</strong></td>
                                                <td>Brand new, unlocked, 256GB storage</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Condition</strong></td>
                                                <td>New</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Owner’s Desired Swap</strong></td>
                                                <td>Looking for a MacBook Pro or cash difference</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Stock</strong></td>
                                                <td>1 Unit Available</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Swap History Tab -->
                            <div class="tab-pane fade" id="history" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <thead>
                                            <tr>
                                                <th>Proposer</th>
                                                <th>Offered Product</th>
                                                <th>Cash Difference</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>JohnDoe123</td>
                                                <td>iPhone 14 Pro Max</td>
                                                <td>₦200</td>
                                                <td>May 18, 10:15 AM</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>JaneSmith</td>
                                                <td>MacBook Air</td>
                                                <td>₦0</td>
                                                <td>May 17, 09:45 AM</td>
                                                <td><span class="badge bg-success">Accepted</span></td>
                                            </tr>
                                            <tr>
                                                <td>SamWilson</td>
                                                <td>Samsung Galaxy S22</td>
                                                <td>₦100</td>
                                                <td>May 16, 03:30 PM</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <div class="modal location-modal fade theme-modal" id="proposeSwapModal" tabindex="-1" aria-labelledby="proposeSwapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="proposeSwapModalLabel">Propose a Swap for <span id="modalProductName">[Product Name]</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <!-- Swap Proposal Checklist -->
                <div class="confirmation-list">
                <h5 class="modal-title">Please Confirm Before Submitting</h5>
                <p class="mt-1 text-content">Make sure to check these before proposing your swap:</p>
                <ul class="list-unstyled mt-3">
                    <li>✔ Your selected product is correct.</li>
                    <li>✔ Optional cash difference (if any) is accurate.</li>
                    <li>✔ Additional details clearly explain your offer.</li>
                    <li>✔ You agree to the swap terms and conditions.</li>
                </ul>
                </div>

                <!-- Swap Proposal Details -->
                <div class="purchase-details mt-4">
                <h5 class="modal-title font-weight-bold">Your Proposal</h5>
                <form id="proposeSwapForm">

                    <div class="mb-3">
                    <label for="userSwapProduct" class="form-label">Select Your Product to Swap</label>
                    <select class="form-select" id="userSwapProduct" name="userSwapProduct" required>
                        <option value="" disabled selected>Choose your product</option>
                        <!-- Dynamically fill this -->
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
                <button type="submit" form="proposeSwapForm" class="btn btn-sm bg-success text-white">Submit Proposal</button>
                </div>
            </div>

            </div>
        </div>
    </div>


    <livewire:components.product_details.related_products />
</div>
