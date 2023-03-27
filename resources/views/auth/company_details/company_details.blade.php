@extends('auth_layout.main')

@section("body")
    <!-- Login Navbar Start -->
    <header id="main-nav">
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset("images/logo-black-svg.svg") }}" alt="logo" class="">
                            </a>
                        </div>
                        <div class="nav-right order-2 order-lg-last position-absolute end-0 me-4 me-md-5">
                            <div class="text-lg-end">
                                <div class="login-user pe-lg-5">
                                    <button style="background-color: transparent; border: none;"
                                            onclick="toggleUserMenu()">
                                        <img src="{{ asset('images/user_icon.jpeg') }}"
                                             alt="user_img" class="login-user-img"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="user-menu-toggler shadow-lg" style="display: none;">
        <div class="login-user toggler-user">
            <img src="{{ asset('images/user_icon.jpeg') }}" alt="user_img" class="login-user-img"
                 style="width: 10rem; height: 10rem;">
            <div class="mt-4">
                <p class="mb-0 fs-3">{{ $user_name ?? ''}}</p>
                <span class="fs-4 text-muted">Freelancer</span>
            </div>
        </div>
        <div class="mt-5">
            <div>
                <a href="#" class="text-dark"><i class="fas fa-cog me-3"></i>Close Account</a>
            </div>
            <div class="mt-2">
                <a href="#" class="text-dark"><i class="fas fa-sign-out-alt me-3"></i>Logout</a>
            </div>
        </div>
    </div>
    <!-- Login Navbar Start -->

    <!-- Form Start -->
    <section class="container">
        <form action="{{ url('/company-detail/store') }}" method="post" class="row" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="">
                    <div class="my-5">
                        <h2 class="mb-0">A few details, then you can check and publish
                            your profile.</h2>
                        <p>A professional photo helps you build trust with your clients. To keep things safe and simple,
                            you'll pay them through us - which is why we need your personal information.</p>
                    </div>
                    <div class="row" style="margin-top: 5rem !important;">

                        <div class="mb-5 col-12">
                            <label class="fw-semibold fs-4 mb-3">Company Name *</label>
                            <input type="text" class="form-control fs-4 py-3" name="company_name"
                                   value="{{ old("company_name") }}">
                            @error('company_name')
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">Country *</label>
                            <input type="text" class="form-control fs-4 py-3" name="country"
                                   value="{{ old("country") }}">
                            @error('country')
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">State *</label>
                            <input type="text" class="form-control fs-4 py-3" name="state"
                                   value="{{ old("state") }}">
                            @error('state')
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">City *</label>
                            <input type="text" class="form-control fs-4 py-3" name="city" value="{{ old("city") }}">
                            @error('city')
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-8">
                            <label class="fw-semibold fs-4 mb-3">Street Address</label>
                            <input type="text" class="form-control fs-4 py-3" name="street_address"
                                   value="{{ old("street_address") }}">
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">ZIP/Postal code</label>
                            <input type="text" class="form-control fs-4 py-3" name="postal_code"
                                   value="{{ old("postal_code") }}">
                        </div>
                        <div class="mb-5">
                            <label class="fw-semibold fs-4 mb-3">Photo *</label>
                            <input type="file" class="form-control fs-4" name="profile_photo_path" accept="image/*">
                            @error('profile_photo_path')
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label class="fw-semibold fs-4 mb-3">Description</label>
                            <textarea class="form-control fs-4 py-3" name="company_description"
                                      placeholder="Write About Company" rows="5"
                                      style="resize: none;">{{ old("company_description") }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ url("/user-detail/introduction") }}"
                           class="btn al-btn al-btn-light">Back</a>
                    </div>
                    <div>
                        <input type="submit" value="Complate Your Profile"
                                                                       class="btn al-btn">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Form End -->
@endsection
