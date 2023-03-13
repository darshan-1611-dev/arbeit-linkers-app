@extends('layout.main')

@section("body")
    <!-- Main Content Start -->
    <section class="container">
        <div>
            <div class="company-profile">
                <div class="personal-detail mb-5">
                    <h3>Personal Detail</h3>
                    <hr>
                    <div class="row mt-5 px-5 align-items-center">
                        <div class="">
                            <h6 class="d-inline-block me-2">Name:</h6>
                            <p class="d-inline-block">{{ $user_detail->name }}</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="d-inline-block me-2">City:</h6>
                            <p class="d-inline-block">{{ $user_detail->user_detail->city }}</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="d-inline-block me-2">State:</h6>
                            <p class="d-inline-block">{{ $user_detail->user_detail->state }}</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="d-inline-block me-2">Country:</h6>
                            <p class="d-inline-block">{{ $user_detail->user_detail->country }}</p>
                        </div>
                        <div class="mt-3">
                            <h6 class="">About Freelancer:</h6>
                            <p class="ps-5">{{ $user_detail->user_detail->user_description }}</p>
                        </div>
                    </div>
                </div>
                <div class="contact-detail mb-5">
                    <h3>Contact Detail</h3>
                    <hr>
                    <div class="row mt-5 px-5 align-items-center">
                        <div class="col-md-5 col-lg-4">
                            <h6 class="d-inline-block me-2">Email:</h6>
                            <p class="d-inline-block">{{ $user_detail->email }}</p>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <h6 class="d-inline-block me-2">Mobile No:</h6>
                            <p class="d-inline-block">{{ $user_detail->mobile_no }}</p>
                        </div>
                    </div>
                </div>
                <div class="company-detail mb-5">
                    <h3>Professional Detail</h3>
                    <hr>
                    <div class="row mt-5 px-5 align-items-center">
                        <div class="col-md-4">
                            <h6 class="d-inline-block me-2">Skills:</h6>
                            <p class="d-inline-block">{{ $user_detail->user_detail->skills }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="d-inline-block me-2">Languages Known:</h6>
                            <p class="d-inline-block">English, {{ $user_detail->user_detail->language }}</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="d-inline-block me-2">Service Rate :</h6>
                            <p class="d-inline-block">{{ $user_detail->user_detail->hourly_rate }} $/hr</p>
                        </div>
                    </div>
                </div>
                {{-- Experience --}}
                <div class="company-detail mb-5">
                    <h3>Experience</h3>
                    <hr>
                    @if($user_detail->user_detail->is_experience == 1)
                        <div class="row mt-5 px-5 align-items-center">
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Job Title:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->job_title }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Company Name:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->job_company }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Job Location:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->job_location }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Country:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->job_country }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Job Start Date:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->job_start_date }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Job End Date:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->is_working == 0 ? $user_detail->user_detail->job_end_date : "Present" }}
                                    </p>
                            </div>
                        </div>
                    @else
                        <p>Nill</p>
                    @endif
                </div>
                {{-- End Experience --}}

                {{-- Education --}}
                <div class="company-detail mb-5">
                    <h3>Education</h3>
                    <hr>
                    @if($user_detail->user_detail->is_education == 1)
                        <div class="row mt-5 px-5 align-items-center">
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">School:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->school_name }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Degree:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->degree_title }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Field Of Study:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->field_of_study }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">Start From:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->education_start_date }}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="d-inline-block me-2">End Date:</h6>
                                <p class="d-inline-block">{{ $user_detail->user_detail->education_end_date }}</p>
                            </div>
                        </div>
                    @else
                        <p>Nill</p>
                    @endif
                </div>
                {{-- End Education --}}
            </div>
        </div>
    </section>
@endsection
