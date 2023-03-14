@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/about_us.css") }}">
@endpush

@section("body")
    <!-- Hero Section Start -->
    <section class="banner px-5">
        <div class="container py-5 px-md-0">
            <div class="row align-items-center my-5 py-5">
                <div class="col-12 col-md-6">
                    <h2 class="">World's largest freelancing and crowdsourcing marketplace.</h2>
                    <p class="">We connect over 64,430,563 employers and freelancers globally from over 247 countries,
                        regions, and
                        territories.</p>
                    <a href="{{ url('/') }}" class="btn al-btn mt-5">Get Freelancers</a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="container">
                        <figure>
                            <img src="{{ asset('images/Banner/about_banner.svg') }}" alt="banner">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- About Section Start -->
    <section class="about-us">
        <div class="container mb-5 pb-5">
            <div class="row g-5 align-items-center">
                <div class="col-sm-4 order-1 order-lg-first d-none d-sm-block">
                    <img src="{{ asset('images/About_Us/overview-company-overview.webp') }}" alt="">
                </div>
                <div class="col-sm-8">
                    <div class="ps-lg-5 order-0 order-lg-last">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusantium reprehenderit
                            hic, a voluptatem asperiores maxime inventore dicta ipsum! Minus, molestias quasi temporibus
                            possimus voluptates nostrum quia magni perspiciatis nihil accusamus laudantium illo
                            reprehenderit illum dignissimos dolore vitae exercitationem iure rem quas numquam placeat
                            eius ipsam architecto fugiat.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusantium reprehenderit
                            hic, a voluptatem asperiores maxime inventore dicta ipsum! Minus, molestias quasi temporibus
                            possimus voluptates nostrum quia magni perspiciatis nihil accusamus laudantium illo
                            reprehenderit illum dignissimos dolore vitae exercitationem iure rem quas numquam placeat
                            eius ipsam architecto fugiat.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusantium reprehenderit
                            hic, a voluptatem asperiores maxime inventore dicta ipsum! Minus, molestias quasi temporibus
                            possimus voluptates nostrum quia magni perspiciatis nihil accusamus laudantium illo
                            reprehenderit illum dignissimos dolore vitae exercitationem iure rem quas numquam placeat
                            eius ipsam architecto fugiat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Our Team Section Start -->
    <section class="container mt-5 pt-5">
        <div>
            <h2 class="text-sm-center">Our Team</h2>
        </div>
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Gautam Savsaviya</h6>
                        <p class="card-text text-muted">CEO & FOUNDER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Avadh Rakholiya</h6>
                        <p class="card-text text-muted">CHIEF OPERATING OFFICER & FOUNDER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Darshan Dhanani</h6>
                        <p class="card-text text-muted">CTO & CO-FOUNDER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Akash Alagiya</h6>
                        <p class="card-text text-muted">MARKETING DIRECTOR & CO-FOUNDER</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Section End -->
@endsection
