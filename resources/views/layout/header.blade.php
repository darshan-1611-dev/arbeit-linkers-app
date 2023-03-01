 <!-- Navbar Section Start -->
 <header id="main-nav">
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
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
    <!-- Navbar Section End -->


    <!-- Login Navbar Start -->
    <!-- <header id="main-nav">
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
                            <a class="navbar-brand" href="index.html">
                                <img src="Assets/Images/logo-black-svg.svg" alt="logo" class="">
                            </a>
                        </div>
                        <div class="nav-right order-2 order-lg-last position-absolute end-0 me-4 me-md-5">
                            <div class="text-lg-end">
                                <div class="login-user pe-lg-5">
                                    <button style="background-color: transparent; border: none;"
                                        onclick="toggleUserMenu()"><img src="Assets/Images/Users/user1.jpg"
                                            alt="user_img" class="login-user-img"></button>
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
            <li><a href="#">Profile</a></li>
            <li><a href="#">Post Jobs</a></li>
            <li><a href="#">Find Jobs</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div> -->
    <!-- Login Navbar Start -->