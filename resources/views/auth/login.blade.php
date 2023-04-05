@extends('auth_layout.main')

@section("body")
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
@endsection
