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
            <div class="col-sm-9 col-md-8">
                <div>
                    <h2 class="mb-5">Hey {{ $user_name ?? ''}}. Ready for your next big Opportunity?</h2>
                </div>

                <div class="py-5">
                    <div class="">
                        <span class="fs-4 me-4 "><i class="fas fa-user me-4 "></i>Answer a few questions and start building
                            your profile</span>
                    </div>

                    <hr class="my-5">

                    <div class="">
                        <span class="fs-4 "><i class="fas fa-envelope-open-text me-4"></i>Apply for open roles or list
                            services for clients to buy</span>
                    </div>

                    <hr class="my-5">

                    <div class="">
                        <span class="fs-4 "><i class="fas fa-dollar-sign me-4"></i>Get paid safely and know we're there to help</span>
                    </div>

                    <hr class="my-5">
                </div>

                <div>
                    <a href="{{ $user_type == 1 ? url('/company-detail') : url('/user-detail/title') }}" class="btn al-btn">Get Started</a>
                    <p class="fs-5 ms-5 text-muted d-none d-md-inline-block">It only takes 5-10 minutes and you can edit
                        it later. We'll save as you go.</p>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block my-5 p-5">
                <div class="border rounded-3 p-5">
                    <div class="login-user toggler-user">
                        <img src="{{ asset('images/user_icon.jpeg') }}" alt="user_img" class="login-user-img"
                             style="width: 10rem; height: 10rem;">
                        <div class="mt-4">
                            <p class="mb-0 fs-3 fw-semibold">{{ $user_name ?? '' }}</p>
                            <span class="fs-4 text-muted">Freelancer</span>
                        </div>

                        <div class="mt-5">
                            <span class="fs-4">
                                "We're thrilled to have you join our freelancer community! As a ArbeitLinkers website, we're dedicated to connecting talented professionals like you with clients who need your skills and expertise. We're here to help you grow your career and achieve your goals."
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form End -->
@endsection
