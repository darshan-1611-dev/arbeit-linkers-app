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
        </div>
    </div>
    <!-- Login Navbar Start -->

    <!-- Form Start -->
    <section class="container">
        <form action="{{ url('/user-detail/title/store') }}" method="post" class="row">
            @csrf
            <div class="col-sm-8">
                <div class="my-5">
                    <p class="fs-5 text-muted mb-4">1/7</p>
                    <h2 class="mb-0">Add a title to tell the world what you do.</h2>
                    <p>It's the very first thing that client see, so make it count. stand out by describing
                        yourexpertise
                        your own words.</p>
                </div>
                <div class="" style="margin-top: 5rem !important;">

                    <div class="mb-4">
                        <input type="text" class="form-control fs-4 py-3" name="user_title" value="{{ old("user_title") }}"
                               placeholder="Software Enginner | Javascript | iOS">
                        @if ($errors->any())
                            <div >
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $error }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ url("/user-detail/introduction") }}" class="btn al-btn al-btn-light">Back</a>
                    </div>
                    <div>
                        <button type="submit" class="btn al-btn">Next, Add your
                            experience
                        </button>
                        {{--                        <a href="{{ url("/user-detail/work_experience") }}" class="btn al-btn">Next, Add your--}}
                        {{--                            experience</a>--}}
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
