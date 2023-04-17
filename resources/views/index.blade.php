@extends('layout.main')

@section("body")
    <!-- Hero Section Start -->
    <section class="banner px-5">
        <div class="container py-5 px-md-0">
            <div class="row align-items-center my-5 py-5">
                <div class="col-12 col-md-6">
                    <h1 class="">Find Your Next Freelance Gig with Ease</h1>
                    <p class="">Connect with Top Talent and Grow Your Business Today</p>
                    <a href="{{ url('login') }}" class="btn al-btn mt-5">Get Started</a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="container">
                        <figure>
                            <img src="{{ asset("images/Banner/index_banner.svg") }}" alt="banner">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Client Section Start -->
    <section>
        <div class="brands">
            <h3 class="text-center">Trusted By Over 5000 Clients</h3>
            <div class="brand-info">
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/airbus.svg") }}' alt="airbus"/>
                </div>

                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/amazon.svg") }}' alt="amazon"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/deloitte.svg") }}' alt="deloitte"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/facebook.svg") }}' alt="facebook"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/google.svg") }}' alt="google"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/netflix.svg") }}' alt="netflix"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/paypal.svg") }}' alt="paypal"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/airbus.svg") }}' alt="airbus"/>
                </div>

                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/amazon.svg") }}' alt="amazon"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/deloitte.svg") }}' alt="deloitte"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/facebook.svg") }}' alt="facebook"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/google.svg") }}' alt="google"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/netflix.svg") }}' alt="netflix"/>
                </div>
                <div class="brand-logo">
                    <img src='{{ asset("images/Clients/paypal.svg") }}' alt="paypal"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->


    <!-- Facts Section Start -->
    <section class="facts">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>8,500</h2>
                        <p>Completed Projects</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center">
                        <h2>9,470 </h2>
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
    <!-- Facts Section End -->


    <!-- Category Section Start -->
    <section>
        <div class="category">
            <div class="">
                <div class="text-center">
                    <h2>Browse Talent By Category</h2>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card mx-auto">
                            <img src="{{ asset("images/Category/web-design.jpg") }}" class="card-img-top"
                                 alt="Web Design">
                            <div class="card-body pt-4">
                                <h4 class="card-title fw-semibold">Web Design</h4>
                                <p class="card-text">₹ 2500 In 1 Day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card mx-auto">
                            <img src="{{ asset("images/Category/ui-ux.jpg") }}" class="card-img-top" alt="App Devloper">
                            <div class="card-body pt-4">
                                <h4 class="card-title fw-semibold">App Devloper</h4>
                                <p class="card-text">₹ 3000 In 1 Day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card mx-auto">
                            <img src="{{ asset("images/Category/graphic-design.jpg") }}" class="card-img-top"
                                 alt="Graphic Design">
                            <div class="card-body pt-4">
                                <h4 class="card-title fw-semibold">Graphic Design</h4>
                                <p class="card-text">₹ 1000 In 1 Day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card mx-auto">
                            <img src="{{ asset("images/Category/web-development.jpg") }}" class="card-img-top"
                                 alt="Web Development">
                            <div class="card-body pt-4">
                                <h4 class="card-title fw-semibold">Web Devloper</h4>
                                <p class="card-text">₹ 5000 In 1 Day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    {{--                    <a href="#" class="btn al-btn">Show More</a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->


    <!-- Feature Section Start -->
    <section class="features">
        <div>
            <div class="container">
                <div class="text-center pb-5">
                    <h2 class="pb-5">Our Automated Features</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4" style="margin-bottom: 15px;">
                        <div class="ft-1 h-100">
                            <h3>Pricing Model</h3>
                            <p class="features_text">The pricing model for a freelancing website is also an important
                                factor to consider. Does the platform charge fees to freelancers or clients, or both?
                                Are the fees transparent and reasonable? Make sure to evaluate the pricing model to
                                ensure it is fair and reasonable for all parties involved.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" style="margin-bottom: 15px;">
                        <div class="ft-2 h-100">
                            <h3>Tech Solutions</h3>
                            <p class="features_text">One important aspect to consider when consulting for a freelancing
                                website is the platform's features. This includes things like job posting, freelancer
                                profiles, communication tools, payment processing, and dispute resolution mechanisms.
                                Make sure to evaluate each feature and assess whether it meets the needs of both clients
                                and freelancers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" style="margin-bottom: 15px;">
                        <div class="ft-3 h-100">
                            <h3>Customer Support</h3>
                            <p class="features_text">A reliable and responsive customer support team is crucial for any
                                freelancing website. Evaluate the platform's customer support by reviewing their
                                response time, helpfulness, and effectiveness in resolving issues. A platform that
                                provides excellent customer support can help build trust and loyalty among users.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" style="margin-bottom: 15px;">
                        <div class="ft-4 h-100">
                            <h3>User Experience</h3>
                            <p class="features_text">the platform's interface is ease of use for both clients and
                                freelancers. Is it user-friendly and intuitive, or confusing and difficult to navigate?
                                A positive user experience is crucial for retaining users and attracting new ones.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" style="margin-bottom: 15px;">
                        <div class="ft-5 h-100">
                            <h3>Data Retrieval</h3>
                            <p class="features_text">The data retrieval for a freelancing website is also an important
                                factor to consider. We provide payment system without charging.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" style="margin-bottom: 15px;">
                        <div class="ft-6 h-100">
                            <h3>Flexible System</h3>
                            <p class="features_text">flexible website is scalable and can adapt to changing needs and
                                requirements. This means the website able to handle an increase in traffic or content
                                without compromising its performance or functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->


    <!-- About Section Start -->
    <section class="about">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 pe-md-5  order-1 order-lg-0">
                    <h1 class="text-white mb-5">Find the <span>talent</span> needed to get your business
                        <span>growing</span>.
                    </h1>
                    <a href="{{ url('login') }}" class="btn al-btn mt-5">Get Started</a>
                </div>
                <div class="col-12 col-lg-6 ps-md-5 d-none d-md-block pt-5 pt-lg-0 order-0 order-lg-1">
                    <img src="{{ asset("images/Banner/about.webp") }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->



    <!-- Testimonial Section Start -->
    <section class="section-testimonial">
        <div class="">
            <h2 class="al-h2 text-center">Happy Clients With Our Freelancers</h2>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>I have been using ArbeitLinkers for several months now, and I must say that I am
                            thoroughly impressed with the platform. The website is easy to navigate, and I was able to
                            find high-quality freelancers to work with quickly. The communication tools provided by the
                            website make it easy to stay in touch with my freelancers and ensure that projects are
                            completed on time.</p>
                    </div>
                    <div class="swiper-client-data">
                        <figure class=''>
                            <img src="{{ asset("images/Users/user1.jpg") }}" alt="Client Review"/>
                        </figure>
                    </div>
                    <div class="client-data-detail col-7">
                        <p>David Rodriguez, SEO Manager</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>One of the things that I appreciate about ArbeitLinkers is the range of services
                            available. Whether I need a writer, graphic designer, or web developer, I can find someone
                            who fits my needs on this platform. The ability to filter freelancers based on their skills
                            and experience makes it easy to find the right person for the job.</p>
                    </div>
                    <div class="swiper-client-data">
                        <figure class=''>
                            <img src="{{ asset("images/Users/user2.jpg") }}" alt="Client Review"/>
                        </figure>
                    </div>
                    <div class="client-data-detail col-7">
                        <p>Emily Chen, Software Engineer</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>Finally, the payment system is reliable and secure. I appreciate that the website handles all
                            financial transactions, so I don't have to worry about paying freelancers directly or
                            managing invoices. Overall, I highly recommend ArbeitLinkers to anyone looking for
                            high-quality freelancers and a smooth, user-friendly experience."</p>
                    </div>
                    <div class="swiper-client-data">
                        <figure class=''>
                            <img src="{{ asset("images/Users/user3.jpg") }}" alt="Client Review"/>
                        </figure>
                    </div>
                    <div class="client-data-detail col-7">
                        <p>Rachel Kim, Entrepreneur</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-client-msg">
                        <p>What I appreciate most about ArbeitLinkers is their support team. They were always
                            quick to respond to any questions I had and provided me with helpful advice on how to
                            optimize my job posting to attract the right freelancers.</p>
                    </div>
                    <div class="swiper-client-data">
                        <figure class=''>
                            <img src="{{ asset("images/Users/user4.jpg") }}" alt="Client Review"/>
                        </figure>
                    </div>
                    <div class="client-data-detail col-7">
                        <p>Michael Lee, Marketing Manager</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Testimonial Section End -->
@endsection

@push('js')
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }

                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
@endpush
