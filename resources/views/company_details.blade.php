@extends('layout.main')

@section("body")
    <section class="container">
        <div>
            <div class="company-profile">
                <div class="personal-detail mb-5">
                    <h3>Personal Detail</h3>
                    <hr>
                    <div class="row mt-5 px-5 align-items-center">
                        <div class="">
                            <h6 class="d-inline-block me-2">Company Name:</h6>
                            <p class="d-inline-block">{{ $company_detail->user_detail->company_name }}</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="d-inline-block me-2">City:</h6>
                            <p class="d-inline-block">{{ $company_detail->user_detail->city }}</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="d-inline-block me-2">State:</h6>
                            <p class="d-inline-block">{{ $company_detail->user_detail->state }}</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="d-inline-block me-2">Country:</h6>
                            <p class="d-inline-block">{{ $company_detail->user_detail->country }}</p>
                        </div>
                    </div>
                </div>
                <div class="contact-detail mb-5">
                    <h3>Contact Detail</h3>
                    <hr>
                    <div class="row mt-5 px-5 align-items-center">
                        <div class="col-md-5 col-lg-4">
                            <h6 class="d-inline-block me-2">Email:</h6>
                            <p class="d-inline-block">{{ $company_detail->email }}</p>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <h6 class="d-inline-block me-2">Mobile No:</h6>
                            <p class="d-inline-block">{{ $company_detail->mobile_no }}</p>
                        </div>
                    </div>
                </div>
                <div class="company-detail mb-5">
                    <h3>About Company</h3>
                    <hr>
                    <div class="row mt-5 px-5 align-items-center">
                        <div class="">
                            <p class="d-inline-block">{{ $company_detail->user_detail->company_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
