<div class="row">
    <div class="col-sm-12">
        <!-- KYC Details Start -->
        <div class="card">
            <div class="card-body">
                <div class="title-header option-title mb-3">
                    <h5>KYC Verification</h5>
                </div>

                @if(Auth::user()->kyc)
                    <!-- Show KYC Status -->
                    <div class="alert alert-info" role="alert">
                        Your current KYC Status is: 
                        <strong>{{ Auth::user()->kyc->status }}</strong>
                    </div>

                    <!-- Uploaded Document (if available) -->
                    <div class="mb-4">
                        <label class="form-label">Uploaded Document</label>
                        <div>
                            <a href="#" target="_blank" class="btn btn-sm btn-outline-primary">
                                View Document
                            </a>
                        </div>
                    </div>
                @else
                    <!-- Upload KYC Form -->
                    <div class="alert alert-warning" role="alert">
                        You are yet to upload your KYC Document
                    </div>
                    <form action="#" method="POST" enctype="multipart/form-data" class="theme-form theme-form-2">
                        <!-- Add CSRF token if needed manually -->
                        <div class="row">
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Select ID Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="id_type" required>
                                        <option value="">Select ID Type</option>
                                        <option value="driver licence">Drivers License</option>
                                        <option value="national id card">Nation ID Card</option>
                                        <option value="voters card">Voters Card</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Upload Front View Of Your ID Card</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="front_id" required>
                                    <small class="text-muted">Accepted formats: JPG, PNG, PDF</small>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Upload Back View Of Your ID Card</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="back_id" required>
                                    <small class="text-muted">Accepted formats: JPG, PNG, PDF</small>
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-solid">Submit for Verification</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
        <!-- KYC Details End -->
    </div>
</div>
