@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">
        <!-- Sidebar Start -->

        <nav class="sidebar">
            <header>
                <div class="image-text py-4 px-5">
                    <span class="image">
                        <img src="" alt="" class="logo  d-none">
                        <img src="" alt="" class="logo-icon d-none">
                    </span>
                </div>

                <!-- Arrow for toggle sidebar -->
                <i class="fas fa-chevron-right toggle"></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <ul class="menu-links mx-4">
                        <li class="nav-link">
                            <a href="{{ url('/user-profile') }}">
                                <i class="fas fa-home icon fs-3"></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Freelancer/projects.html">
                                <i class="fas fa-briefcase icon fs-3"></i>
                                <span class="text nav-text">Projects</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="/Freelancer/bids.html">
                                <i class="fas fa-clipboard-list icon fs-3"></i>
                                <span class="text nav-text">Bids</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class="fas fa-wallet icon fs-3"></i>
                                <span class="text nav-text">Transactions</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Sidebar End-->

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
                                    <h6 class="">About Me:</h6>
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
                                    <h6 class="d-inline-block me-2">Moblie No:</h6>
                                    <p class="d-inline-block">{{ $user_detail->mobile_no }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="company-detail mb-5">
                            <h3>Professional Detail</h3>
                            <hr>
                            <div class="row mt-5 px-5 align-items-center">
                                {{--                                <div class="col-md-4">--}}
                                {{--                                    <h6 class="d-inline-block me-2">Experience:</h6>--}}
                                {{--                                    <p class="d-inline-block">4 years</p>--}}
                                {{--                                </div>--}}
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
                                <form action="{{ url('/user-profile/update') }}" method="post" class="row" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header px-5 py-4">
                                            <h1 class="modal-title fs-3" id="exampleModalLabel">Update Details</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-5">

                                            <div class="mb-5 col-md-4">
                                                <label class="fw-semibold fs-4 mb-3">City *</label>
                                                <input type="text" class="form-control fs-4 py-3"
                                                       value="{{ $user_detail->user_detail->city }}" name="city">
                                                @error('city')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-md-4">
                                                <label class="fw-semibold fs-4 mb-3">State *</label>
                                                <input type="text" class="form-control fs-4 py-3" name="state"
                                                       value="{{ $user_detail->user_detail->state }}">
                                                @error('state')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-md-4">
                                                <label class="fw-semibold fs-4 mb-3">Country *</label>
                                                <input type="text" class="form-control fs-4 py-3" name="country"
                                                       value="{{ $user_detail->user_detail->country }}">
                                                @error('country')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-5 col-6 col-md-6">
                                                <label class="fw-semibold fs-4 mb-3">Mobile *</label>
                                                <input type="text" class="form-control fs-4 py-3" name="mobile_no"
                                                       value="{{ $user_detail->mobile_no }}"
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
                                                <label class="fw-semibold fs-4 mb-3">About Yourself</label>
                                                <textarea class="form-control fs-4 py-3" name="user_description"
                                                          placeholder="Write About your Self" rows="5"
                                                          style="resize: none;">{{ $user_detail->user_detail->user_description }}</textarea>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <h6 class="pt-2">Skills and Expertise *
                                                </h6>
                                                <input type="text" class="form-control fs-4 py-3" name="skills"
                                                       value="{{ $user_detail->user_detail->skills }}"
                                                       placeholder="Skills and Expertise">
                                                @error('skills')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <h6 class="pt-2">Service Rate *
                                                </h6>
                                                <input type="text" class="form-control fs-4 py-3" name="hourly_rate"
                                                       value="{{ $user_detail->user_detail->hourly_rate }}"
                                                       placeholder=" 0.00 $/hr">
                                                @error('hourly_rate')
                                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{--  <div class="mb-3 col-lg-6">--}}
                                            {{--  <h6 class="pt-2">Work Experience:--}}
                                            {{--   </h6>--}}
                                            {{--   <input type="text" class="form-control fs-4 py-3" name=""--}}
                                            {{--     placeholder="Work Experience in years">--}}
                                            {{--     <span class="text-danger fs-5">* Skills and Expertise--}}
                                            {{--          </span>--}}
                                            {{--      </div>--}}
                                            {{--                                            <div class="mb-3 col-lg-6">--}}
                                            {{--                                                <h6 class="pt-2">Language Known:--}}
                                            {{--                                                </h6>--}}
                                            {{--                                                <input type="text" class="form-control fs-4 py-3" name="language"--}}
                                            {{--                                                       value="{{ $user_detail->user_detail->language }}"--}}
                                            {{--                                                       placeholder="Language Known">--}}
                                            {{--                                            </div>--}}

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
