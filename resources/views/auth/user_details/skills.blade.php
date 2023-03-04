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
        <div class="row gx-5">
            <div class="col-md-7">
                <div class="my-5">
                    <p class="fs-5 text-muted mb-4">5/10</p>
                    <h2 class="mb-0">Nearly there! What work are you here to do?</h2>
                    <p>Your skills show clients what you can offer, and help us choose which jobs to recommend to you.
                        Add
                        or remove the ones we've suggested, or start typing to pick more. It's up to you.</p>
                </div>
                <div class="" style="margin-top: 5rem !important;">
                    <form action="" method="post" class="row">
                        <div class="mb-5">
                            <span class="d-flex justify-content-between">
                                <label class="fw-semibold fs-4 mb-3 col-6">Your skills</label>
                                <span class="text-muted fs-5">Max 15 skills</span>
                            </span>
                            <input type="text" class="form-control fs-4 py-3" name="" placeholder="Enter skills here">
                            <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> At least one skill
                                is required.</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block mt-5 ms-5 px-5">
                <div class="border rounded-3 p-5 mx-auto">
                    <div class="">
                        <img src="{{ asset('images/user_icon.jpeg') }}" alt="user_img" class="login-user-img rounded-circle"
                             style="width: 7rem; height: 7rem;">
                        <div class="mt-5">
                            <p class="fw-semibold">
                                "ArbeitLinkers's algorithm will
                                recommend specific job
                                posts to you based on your
                                skills. So choose them
                                carefully to get the best
                                match!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ url('/user-detail/languages') }}" class="btn al-btn al-btn-light">Back</a>
                </div>
                <div>
                    <a href="{{ url('/user-detail/rate') }}"><input type="submit" value="Next, Write a Hourly Rate"
                                                                         class="btn al-btn"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Form End -->
@endsection
