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
                    <a href="{{ url('/') }}" class="btn al-btn mt-5">Explore Us</a>
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
                        <p>At ArbeitLinkers, we believe in empowering freelancers to pursue their passions
                            and succeed in their careers. Our platform connects talented professionals with clients from
                            around the world, enabling them to work on interesting projects and earn a living doing what
                            they love.</p>

                        <p>We understand that freelancing can be challenging, which is why we strive to make the
                            process as easy and seamless as possible. Our user-friendly platform allows freelancers to
                            showcase their skills and experience, while providing clients with a range of tools and
                            features to find the perfect candidate for their project.
                        </p>
                        <p>We also believe in transparency and fairness. Our platform ensures that freelancers are paid
                            on time and at fair rates, while providing clients with the peace of mind that they are
                            working with reliable and trustworthy professionals.</p>

                        <p>At ArbeitLinkers, we are committed to supporting the freelance community and
                            helping freelancers succeed. Whether you are just starting out or are an experienced
                            professional, we invite you to join our community and take your career to the next
                            level.</p>
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
                    <img src="{{ asset('images/user3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Gautam Savsaviya</h6>
                        <p class="card-text text-muted">CEO & FOUNDER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Avadh Rakholiya</h6>
                        <p class="card-text text-muted">CHIEF OPERATING OFFICER & FOUNDER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-4">
                        <h6>Darshan Dhanani</h6>
                        <p class="card-text text-muted">CTO & CO-FOUNDER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/Users/user4.jpg') }}" class="card-img-top" alt="...">
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
