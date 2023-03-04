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
        <div class="row">
            <div class="">
                <div class="my-5">
                    <p class="fs-5 text-muted mb-4">7/10</p>
                    <h2 class="mb-0">A few last details, then you can check and publish
                        your profile.</h2>
                    <p>A professional photo helps you build trust with your clients. To keep things safe and simple,
                        they'll pay you through us - which is why we need your personal information.</p>
                </div>
                <div class="" style="margin-top: 5rem !important;">
                    <form action="" method="post" class="row">
                        <div class="mb-5 col-8">
                            <label class="fw-semibold fs-4 mb-3">Street Address *</label>
                            <input type="text" class="form-control fs-4 py-3" name="">
                            <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> Fill in your street address</span>
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">City *</label>
                            <input type="text" class="form-control fs-4 py-3" name="">
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> Add Your City</span>
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">State *</label>
                            <input type="text" class="form-control fs-4 py-3" name="">
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> Add Your State</span>
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">Country *</label>
                            <input type="text" class="form-control fs-4 py-3" name="">
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> Add Your Country</span>
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">ZIP/Postal code</label>
                            <input type="text" class="form-control fs-4 py-3" name="">
                        </div>
                        <div class="mb-5 col-6">
                            <label class="fw-semibold fs-4 mb-3">Profile Photo</label>
                            <input type="file" class="form-control fs-4" name="" accept="image/*">
                            <span class="text-danger fs-5"><i
                                    class="fas fa-exclamation-circle"></i> Upload a photo</span>
                        </div>

                </div>
                </form>
            </div>
        </div>
        </div>
        <div class="mt-5">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ url("/user-detail/rate") }}" class="btn al-btn al-btn-light">Back</a>
                </div>
                <div>
                    <a href=""><input type="submit" value="Submit" class="btn al-btn"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Form End -->
@endsection
