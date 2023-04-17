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
        <form action="{{ url('/user-detail/rate/store') }}" method="post" class="row">
            @csrf
            <div class="row">
                <div class="">
                    <div class="my-5">
                        <p class="fs-5 text-muted mb-4">6/7</p>
                        <h2 class="mb-0">Now, let's set your hourly rate.</h2>
                        <p>Clients will see this rate on your profile and in search results once you publish your
                            profile.
                            You can adjust your rate every time you submit a proposal.</p>
                    </div>
                    <div class="" style="margin-top: 5rem !important;">

                        <div class="mb-5">
                            <div class="row align-items-end justify-content-between">
                                <div class="col-9">
                                    <p class="fw-semibold fs-3 m-0">Hourly rate</p>
                                    <span class="fs-4 text-muted d-block">Total amount the client will see.</span>
                                    @error('hourly_rate')
                                    <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control fs-4 py-3" name="hourly_rate"
                                           placeholder="0.00 ₹/hr">
                                </div>
                            </div>
                        </div>
{{--                        <hr>--}}
{{--                        <div class="mb-5">--}}
{{--                            <div class="row align-items-end justify-content-between">--}}
{{--                                <div class="col-9">--}}
{{--                                    <p class="fw-semibold fs-3 m-0">Service fee</p>--}}
{{--                                    <span class="fs-4 text-muted d-block">This helps us run the platform and provide--}}
{{--                                        services like payment protection and customer support.</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <input type="text" class="form-control fs-4 py-3" name="" placeholder="0.00 ₹/hr"--}}
{{--                                           readonly style="background-color: var( --bg-light-2);">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <hr>--}}
{{--                        <div class="mb-5">--}}
{{--                            <div class="row align-items-end justify-content-between">--}}
{{--                                <div class="col-9">--}}
{{--                                    <p class="fw-semibold fs-3 m-0">You'll get</p>--}}
{{--                                    <span class="fs-4 text-muted d-block">The estimated amount you'll get paid after service fees.</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-3">--}}
{{--                                    <input type="text" class="form-control fs-4 py-3" name="" placeholder="0.00 ₹/hr">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="mt-5">
                    <div class="rounded-3 p-5 mx-auto" style="background-color: var(--bg-green);">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h5>ArbeitLinkers service fees can be as nil as 0%</h5>
                            </div>
                            <div>
                                <img src="{{ asset('images/service-fees-chart.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ url("/user-detail/skills") }}" class="btn al-btn al-btn-light">Back</a>
                    </div>
                    <div>
                        <input type="submit"
                               value="Next, write an overview"
                               class="btn al-btn">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Form End -->
@endsection
