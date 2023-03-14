@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/faq.css") }}">
@endpush

@section("body")
    <!-- faq section start  -->
    <section id="faqs" class="faq_wrapper container">
        <div class="mx-4 mx-sm-0">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h4 class="faq_subtitle">We're here to help</h4>
                    <h2 class="faq_title">Frequently asked questions</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-7 mb-5 mb-lg-0">
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. How does the free trial work?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Use this section to answer some of your customers most frequently asked questions
                                        in
                                        a compact and concise manner. There's plenty of space for you to add more
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What happens when my trial ends?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Use this section to answer some of your customers most frequently asked questions
                                        in
                                        a compact and concise manner. There's plenty of space for you to add more
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    3. How do I make payments?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Use this section to answer some of your customers most frequently asked questions
                                        in
                                        a compact and concise manner. There's plenty of space for you to add more
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    4. Can I upgrade my plan any time?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Use this section to answer some of your customers most frequently asked questions
                                        in
                                        a compact and concise manner. There's plenty of space for you to add more
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    5. How do I get in touch with support?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Use this section to answer some of your customers most frequently asked questions
                                        in
                                        a compact and concise manner. There's plenty of space for you to add more
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5 d-none d-lg-block">
                    <img src="{{ asset('images/Banner/faq_banner.svg') }}" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Send message -->
        <div class="free_trial mt-5 pt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-6 text-center text-lg-start">
                        <h5 class="free_title">Questions not listed above? Send us a message and we'll get back to you
                        </h5>
                    </div>
                    <div class="col-sm-12 col-lg-6 text-center text-lg-end mt-4 mt-lg-0">
                        <a class="btn al-btn" href="{{ url('contact-us') }}" style="text-decoration: none;"><i
                                class="fa fa-rocket"
                                aria-hidden="true"></i> Contect Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq Section End -->
@endsection
