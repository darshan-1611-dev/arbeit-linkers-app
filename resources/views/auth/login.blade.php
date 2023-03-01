<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Assets/Images/favicon.ico">
    <title>ArebitLinkers - Freelance Service Provider</title>


    <!-- Swiper JS cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <!-- Navbar Section Start -->
    <header id="main-nav">
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg fixed-top bg-white justify-content-between">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-black-svg.svg') }}" alt="logo" class="">
                    </a>
                    <div class="nav-right">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{ url('register') }}" class="nav-link">Sign Up</a>
							</li>
						</ul>
					</div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Navbar Section End -->


    <!-- Login Section Start -->
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-6 col-xl-4 mx-auto rounded-3 border p-5">
                    <div>
                        <h2>Log In</h2>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            <span class="text-danger fs-5">{{ $error }}</span>
                            </li>
                        @endforeach
                        </ul>
                        </div>
                    @endif

                    <form action="{{ url('loginStore') }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control fs-4 py-3" name="email" id=""
                                placeholder="name@example.com">
                            <!-- <span class="text-danger fs-5">* Please Enter your Email Id</span> -->
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control fs-4 py-3" name="password" id=""
                                placeholder="Password">
                            <!-- <span class="text-danger fs-5">* Please Enter your Password</span> -->
                        </div>
                        <div class="text-end">
                            <a href="#" class="fw-bold text-decoration-none">Forget Password?</a>
                        </div>
                        <button type="submit" class="btn al-btn w-100 my-4">Log In</button>
                        <div class="mb-4 text-center my-5">
                            <p class="line-heading my-5  text-muted">You don't have acoount?</p>
                            <a href="{{ url('register') }}" class="btn al-btn al-btn-light">Create an Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->


    <!-- Footer Section Start -->
    <footer class="footer bd-footer mt-5 px-1">
        <div class="container">
            <div class="row">
                <div class="col-12 footer-credits text-center">
                    <p class="py-5 pb-4">&copy; <a href="index.html" target="_blank"
                            title="ArbeitLinkers">ArbeitLinkers</a>&trade;. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <!-- Jquery Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Swiper JS cnd link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>