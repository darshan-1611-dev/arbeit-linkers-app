<!-- Navbar Section Start -->
@guest
    <header id="main-nav">
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-black-svg.svg') }}" alt="logo" class="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-stream"></i>
                    </button>
                    <div class="collapse navbar-collapse mt-4 mt-lg-0" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Find Talent
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="job.html">Find Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                        </ul>
                        <div class="nav-right">
                            <div class="text-lg-end">
                                <hr class="d-lg-none">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="{{ url('login') }}" class="nav-link">Log In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('register') }}" class="nav-link">Sign
                                            Up</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
@endguest
<!-- Navbar Section End -->


<!-- Login Navbar Start -->
@auth
    <header id="main-nav">
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <i class="fas fa-stream"></i>
                            </button>
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('images/logo-black-svg.svg') }}" alt="logo" class="">
                            </a>
                        </div>
                        <div class="nav-right order-2 order-lg-last position-absolute end-0 me-4 me-md-5">
                            <div class="text-lg-end">
                                <div class="login-user pe-lg-5">
                                    @php
                                        $profile_picture = auth()->user()->user_detail->profile_photo_path ? "storage/" . auth()->user()->user_detail->profile_photo_path : 'images/user_icon.jpeg';
                                    @endphp
                                    <button style="background-color: transparent; border: none;"
                                            onclick="toggleUserMenu()"><img src="{{ asset($profile_picture) }}"
                                                                            alt="user_img" class="login-user-img">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse mt-4 mt-lg-0" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Find Talent
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="job.html">Find Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="user-menu-toggler shadow-lg" style="display: none;">
        <ul>
            <li><a href="{{ auth()->user()->user_type == 0 ? url('user-profile') : url('company-profile')}}">Profile</a></li>
            <li><a href="{{ url('list-job') }}">Find Jobs</a></li>
            @if(auth()->user()->user_type == 1)
                <li><a href="{{ url("/create-job") }}">Post Jobs</a></li>
            @endif
            <li><a href="{{ url('logout') }}">Logout</a></li>
        </ul>
    </div>
@endauth
<!-- Login Navbar Start -->
