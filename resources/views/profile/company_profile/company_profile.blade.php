@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">

        @include('profile.company_profile.sidebar')

        <!-- Main Section Start -->
        <div class="home">
            <!-- Main Content Start -->
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
                                    <h6 class="d-inline-block me-2">Moblie No:</h6>
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
                    <div class="update-btn">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn al-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Update Details
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ url('/company-profile/update') }}" method="post" class="row" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-content">

                                        <div class="modal-header px-5 py-4">
                                            <h1 class="modal-title fs-3" id="exampleModalLabel">Update Details</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-5 row">
                                            <div class="mb-5 col-md-12">
                                                <label class="fw-semibold fs-4 mb-3">Company Name *</label>
                                                <input type="text" class="form-control fs-4 py-3"
                                                       name="company_name"
                                                       value="{{ $company_detail->user_detail->company_name }}">
                                                @error('company_name')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-5 col-md-12">
                                                <label class="fw-semibold fs-4 mb-3">Email *</label>
                                                <input type="text" class="form-control fs-4 py-3"
                                                       name="email"
                                                       value="{{ $company_detail->email }}">
                                                @error('email')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-5 col-md-4">
                                                <label class="fw-semibold fs-4 mb-3">City *</label>
                                                <input type="text" class="form-control fs-4 py-3"
                                                       name="city"
                                                       value="{{ $company_detail->user_detail->city }}">
                                                @error('city')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-md-4">
                                                <label class="fw-semibold fs-4 mb-3">State *</label>
                                                <input type="text" class="form-control fs-4 py-3" name="state"
                                                       value="{{ $company_detail->user_detail->state }}">
                                                @error('state')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-md-4">
                                                <label class="fw-semibold fs-4 mb-3">Country *</label>
                                                <input type="text" class="form-control fs-4 py-3" name="country"
                                                       value="{{ $company_detail->user_detail->country }}">
                                                @error('country')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-6 col-md-6">
                                                <label class="fw-semibold fs-4 mb-3">Mobile</label>
                                                <input type="text" class="form-control fs-4 py-3" name="mobile_no"
                                                       value="{{ $company_detail->mobile_no }}"
                                                       placeholder="Enter number">
                                                @error('mobile_no')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-md-6">
                                                <label class="fw-semibold fs-4 mb-3">Photo</label>
                                                <input type="file" class="form-control fs-4" name="profile_photo_path"
                                                       accept="image/*">
                                            </div>
                                            <div class="mb-5">
                                                <label class="fw-semibold fs-4 mb-3">Company Description</label>
                                                <textarea class="form-control fs-4 py-3"
                                                          name="company_description"
                                                          placeholder="Write About Company" rows="5"
                                                          style="resize: none;">{{ $company_detail->user_detail->company_description }}</textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer mx-4">
                                            <button type="button" class="btn al-btn al-btn-light"
                                                    data-bs-dismiss="modal">Close
                                            </button>
                                            <input type="submit" class="btn al-btn" value="Save Changes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->
        </div>
        <!-- Main Section End -->
    </div>
@endsection

@push('js')
    <script src="{{ asset("js/sidebar.js") }}"></script>
@endpush
