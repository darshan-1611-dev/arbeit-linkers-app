@extends('layout.main')

@section("body")
    <!-- hero section -->
    <section id="home" class="banner_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 my-5 my-md-0 text-center text-md-start">
                    <p class="banner-subtitle">Social Media Akash</p>
                    <h1 class="banner-title">Start <span>connecting</span> with your online customers</h1>
                    <p class="banner-title-text">Hashtag is a bright and results driven social media marketing
                        drive customers, grow your audience and expand your reach.</p>
                </div>
                <div class="col-md-6 header-img-section">
                    <img src='{{ asset("images/header-img.svg") }}' class="img-fluid" alt="Banner"/>
                </div>
            </div>
        </div>
    </section>

    <!-- brand section -->
    <div class="brands">
        <h4>Trusted By:</h4>
        <div class="brand-info">
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/airbus.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/amazon.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/deloitte.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/facebook.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/google.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/ibm.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/netflix.svg") }}' alt="" width="250" height="100"/>
            </div>
            <div class="brand-logo">
                <img src='{{ asset("images/brand-logo/paypal.svg") }}' alt="" width="250" height="100"/>
            </div>
        </div>
    </div>

    <!-- project section -->
    <section id="about" class="about_wrapper">
        <div class="projects">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>8,500</h2>
                        <p>Completed Projects</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>9,470</h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>1,120</h2>
                        <p>Ongoing Projects</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>152</h2>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- talent category   -->
    <div class="card-row">
        <div class="container">
            <h2 class="text-center mt-5 pt-5 pb-3 card-heading">Browse talent by category</h2>

            <div class="card-info">

                <div class="card-col">
                    <div class='card'>
                        <div class="card-img">
                            <img src='{{ asset("images/web-design.jpg") }}' alt=""/>
                        </div>
                        <div class="card-detail">
                            <p class='card-title'>Website Design</p>
                            <p class='card-subtitle'>$30 USD in 1 day</p>
                        </div>
                    </div>
                </div>

                <div class="card-col">
                    <div class='card'>
                        <div class="card-img">
                            <img src='{{ asset("images/ui-ux.jpg") }}' alt=""/>
                        </div>
                        <div class="card-detail">
                            <p class='card-title'>App Developer</p>
                            <p class='card-subtitle'>$30 USD in 1 day</p>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <div class='card'>
                        <div class="card-img">
                            <img src='{{ asset("images/graphic-design.jpg") }}' alt=""/>
                        </div>
                        <div class="card-detail">
                            <p class='card-title'>Graphic Design</p>
                            <p class='card-subtitle'>$30 USD in 1 day</p>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <div class='card'>
                        <div class="card-img">
                            <img src='{{ asset("images/web-development.jpg") }}' alt=""/>
                        </div>
                        <div class="card-detail">
                            <p class='card-title'>Web Development</p>
                            <p class='card-subtitle'>$30 USD in 1 day</p>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <div class='card'>
                        <div class="card-img">
                            <img src='{{ asset("images/digital-marketing.jpg") }}' alt=""/>
                        </div>
                        <div class="card-detail">
                            <p class='card-title'>Digital Marketing</p>
                            <p class='card-subtitle'>$30 USD in 1 day</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button type="button" class="btn  al-btn al-btn-dark">Show More</button>
                </div>
            </div>
        </div>
    </div>

    <!-- features  -->
    <section id="features" class="features_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <p class="features_subtitle">So much to offer</p>
                    <h2 class="features_title">Our automated features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-1">
                        <h3>Consultancy</h3>
                        <p class="features_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed
                            tellus turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-2">
                        <h3>Tech Solutions</h3>
                        <p class="features_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed
                            tellus turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-3">
                        <h3>User Dashboard</h3>
                        <p class="features_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed
                            tellus turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-4">
                        <h3>Deadline Notifications</h3>
                        <p class="features_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed
                            tellus turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-5">
                        <h3>Data Retrieval</h3>
                        <p class="features_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed
                            tellus turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="ft-6">
                        <h3>Flexible System</h3>
                        <p class="features_text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed
                            tellus turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
