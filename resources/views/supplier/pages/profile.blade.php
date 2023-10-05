@extends('supplier.layouts.master') <!-- Extending the master.blade.php template -->
@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom mt-8">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('logos/'.$supplier->logo) }}" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $supplier->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{ $supplier->business_type }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p>
                            <button class="btn btn-primary btn-sm ms-auto">Settings</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('supplier.updateProfile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- User Information Section -->
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Name</label>
                                        <input id="name" name="name" class="form-control" type="text"
                                            value="{{ old('name', $supplier->name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email address</label>
                                        <input id="email" name="email" class="form-control" type="email"
                                            value="{{ old('email', $supplier->email) }}">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="form-control-label">Password</label>
                                        <input id="password" name="password" class="form-control" type="password">
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website" class="form-control-label">Website</label>
                                        <input id="website" name="website" class="form-control" type="text"
                                            value="{{ old('website', $supplier->website) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile_primary" class="form-control-label">Primary Mobile</label>
                                        <input id="mobile_primary" name="mobile_primary" class="form-control" type="text"
                                            value="{{ old('mobile_primary', $supplier->mobile_primary) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile_secondary" class="form-control-label">Secondary Mobile</label>
                                        <input id="mobile_secondary" name="mobile_secondary" class="form-control"
                                            type="text"
                                            value="{{ old('mobile_secondary', $supplier->mobile_secondary) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="officephone" class="form-control-label">Office Phone</label>
                                        <input id="officephone" name="officephone" class="form-control" type="text"
                                            value="{{ old('officephone', $supplier->officephone) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="form-control-label">Address</label>
                                        <input id="address" name="address" class="form-control" type="text"
                                            value="{{ old('address', $supplier->address) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zip" class="form-control-label">Zip</label>
                                        <input id="zip" name="zip" class="form-control" type="text"
                                            value="{{ old('zip', $supplier->zip) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country" class="form-control-label">Country</label>
                                        <input id="country" name="country" class="form-control" type="text"
                                            value="{{ old('country', $supplier->country) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state" class="form-control-label">State</label>
                                        <input id="state" name="state" class="form-control" type="text"
                                            value="{{ old('state', $supplier->state) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city" class="form-control-label">City</label>
                                        <input id="city" name="city" class="form-control" type="text"
                                            value="{{ old('city', $supplier->city) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_person_name" class="form-control-label">Contact Person
                                            Name</label>
                                        <input id="contact_person_name" name="contact_person_name" class="form-control"
                                            type="text"
                                            value="{{ old('contact_person_name', $supplier->contact_person_name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_person_email" class="form-control-label">Contact Person
                                            Email</label>
                                        <input id="contact_person_email" name="contact_person_email" class="form-control"
                                            type="text"
                                            value="{{ old('contact_person_email', $supplier->contact_person_email) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_person_phone" class="form-control-label">Contact Person
                                            Phone</label>
                                        <input id="contact_person_phone" name="contact_person_phone" class="form-control"
                                            type="text"
                                            value="{{ old('contact_person_phone', $supplier->contact_person_phone) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="business_type" class="form-control-label">Business Type</label>
                                        <input id="business_type" name="business_type" class="form-control"
                                            type="text" value="{{ old('business_type', $supplier->business_type) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="business_registration_number" class="form-control-label">Business
                                            Registration Number</label>
                                        <input id="business_registration_number" name="business_registration_number"
                                            class="form-control" type="text"
                                            value="{{ old('business_registration_number', $supplier->business_registration_number) }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company_info" class="form-control-label">Company Info</label>
                                        <textarea id="company_info" name="company_info" class="form-control" rows="4">{{ old('company_info', $supplier->company_info) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram" class="form-control-label">Instagram</label>
                                        <input id="instagram" name="instagram" class="form-control" type="text"
                                            value="{{ old('instagram', $supplier->instagram) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook" class="form-control-label">Facebook</label>
                                        <input id="facebook" name="facebook" class="form-control" type="text"
                                            value="{{ old('facebook', $supplier->facebook) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter" class="form-control-label">Twitter</label>
                                        <input id="twitter" name="twitter" class="form-control" type="text"
                                            value="{{ old('twitter', $supplier->twitter) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="linkedin" class="form-control-label">LinkedIn</label>
                                        <input id="linkedin" name="linkedin" class="form-control" type="text"
                                            value="{{ old('linkedin', $supplier->linkedin) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pinterest" class="form-control-label">Pinterest</label>
                                        <input id="pinterest" name="pinterest" class="form-control" type="text"
                                            value="{{ old('pinterest', $supplier->pinterest) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube_channel" class="form-control-label">YouTube Channel</label>
                                        <input id="youtube_channel" name="youtube_channel" class="form-control"
                                            type="text"
                                            value="{{ old('youtube_channel', $supplier->youtube_channel) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tiktok_profile" class="form-control-label">TikTok Profile</label>
                                        <input id="tiktok_profile" name="tiktok_profile" class="form-control"
                                            type="text"
                                            value="{{ old('tiktok_profile', $supplier->tiktok_profile) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="established_year" class="form-control-label">Established Year</label>
                                        <input id="established_year" name="established_year" class="form-control"
                                            type="text"
                                            value="{{ old('established_year', $supplier->established_year) }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="qr_code" class="form-control-label">QR Code</label>
                                        <input id="qr_code" name="qr_code" class="form-control" type="text"
                                            value="{{ old('qr_code', $supplier->qr_code) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="license_number" class="form-control-label">License Number</label>
                                        <input id="license_number" name="license_number" class="form-control"
                                            type="text"
                                            value="{{ old('license_number', $supplier->license_number) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="about" class="form-control-label">About</label>
                                        <input id="about" name="about" class="form-control" type="text"
                                            value="{{ old('about', $supplier->about) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="verification_status" class="form-control-label">Verification
                                            Status</label>
                                        <input id="verification_status" name="verification_status" class="form-control"
                                            type="text"
                                            value="{{ old('verification_status', $supplier->verification_status) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="verified_date" class="form-control-label">Verified Date</label>
                                        <input id="verified_date" name="verified_date" class="form-control"
                                            type="text" value="{{ old('verified_date', $supplier->verified_date) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="verified_by" class="form-control-label">Verified By</label>
                                        <input id="verified_by" name="verified_by" class="form-control" type="text"
                                            value="{{ old('verified_by', $supplier->verified_by) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_rating" class="form-control-label">Customer Rating</label>
                                        <input id="customer_rating" name="customer_rating" class="form-control"
                                            type="text"
                                            value="{{ old('customer_rating', $supplier->customer_rating) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_rating_count" class="form-control-label">Customer Rating
                                            Count</label>
                                        <input id="customer_rating_count" name="customer_rating_count"
                                            class="form-control" type="text"
                                            value="{{ old('customer_rating_count', $supplier->customer_rating_count) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_visitors" class="form-control-label">Total Visitors</label>
                                        <input id="total_visitors" name="total_visitors" class="form-control"
                                            type="text"
                                            value="{{ old('total_visitors', $supplier->total_visitors) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier_profile_link" class="form-control-label">Supplier Profile
                                            Link</label>
                                        <input id="supplier_profile_link" name="supplier_profile_link"
                                            class="form-control" type="text"
                                            value="{{ old('supplier_profile_link', $supplier->supplier_profile_link) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="points" class="form-control-label">Points</label>
                                        <input id="points" name="points" class="form-control" type="text"
                                            value="{{ old('points', $supplier->points) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="two_factor_enabled" class="form-control-label">Two Factor
                                            Enabled</label>
                                        <input id="two_factor_enabled" name="two_factor_enabled" class="form-control"
                                            type="text"
                                            value="{{ old('two_factor_enabled', $supplier->two_factor_enabled) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_employees" class="form-control-label">Total Employees</label>
                                        <input id="total_employees" name="total_employees" class="form-control"
                                            type="text"
                                            value="{{ old('total_employees', $supplier->total_employees) }}">
                                    </div>
                                </div>
                            </div>

                            <!-- SEO Section -->
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">SEO Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_title" class="form-control-label">Meta Title</label>
                                        <input id="meta_title" name="meta_title" class="form-control" type="text"
                                            value="{{ old('meta_title', $supplier->meta_title) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta_description" class="form-control-label">Meta Description</label>
                                        <input id="meta_description" name="meta_description" class="form-control"
                                            type="text"
                                            value="{{ old('meta_description', $supplier->meta_description) }}">
                                    </div>
                                </div>
                                <!-- Add more SEO fields here -->
                            </div>

                            <!-- Additional Fields Section -->
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Additional Fields</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="preferred_communication_start" class="form-control-label">Preferred
                                            Communication Start Time</label>
                                        <input id="preferred_communication_start" name="preferred_communication_start"
                                            class="form-control" type="text"
                                            value="{{ old('preferred_communication_start', $supplier->preferred_communication_start) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="preferred_communication_end" class="form-control-label">Preferred
                                            Communication End Time</label>
                                        <input id="preferred_communication_end" name="preferred_communication_end"
                                            class="form-control" type="text"
                                            value="{{ old('preferred_communication_end', $supplier->preferred_communication_end) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tax_id" class="form-control-label">Tax ID / VAT Number</label>
                                        <input id="tax_id" name="tax_id" class="form-control" type="text"
                                            value="{{ old('tax_id', $supplier->tax_id) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="referral_source" class="form-control-label">Referral Source
                                            Details</label>
                                        <input id="referral_source" name="referral_source" class="form-control"
                                            type="text"
                                            value="{{ old('referral_source', $supplier->referral_source) }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo" class="form-control-label">Logo</label>
                                        <input id="logo" name="logo" class="form-control" type="file">
                                    </div>
                                </div>

                                <!-- Add more additional fields here -->
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="../assets/img/team-2.jpg"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                    class="ni ni-email-83"></i></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">22</span>
                                        <span class="text-sm opacity-8">Friends</span>
                                    </div>
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Photos</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">89</span>
                                        <span class="text-sm opacity-8">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                                Mark Davis<span class="font-weight-light">, 35</span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div>
                            <div class="h6 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
