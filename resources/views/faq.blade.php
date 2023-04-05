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
                                    1. What is freelancing?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Freelancing means that you work as an independent business rather than as an
                                        employee of a company owned by someone else. Freelancers are self-employed
                                        one-person businesses that are often hired for short-term work for bigger
                                        companies or agencies. Some freelancers work for individuals as tutors,
                                        teachers, or coaches of some sort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What things are required for freelancing?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>The core of freelancing is your own skill that creates great results for your
                                        clients. Without skills, freelancing is an inevitable race to the bottom because
                                        the only selling point would be a lower price than what other freelancers
                                        without specific skills can offer. This leads to working for peanuts or even for
                                        free.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    3. Do freelancers need to register a company?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Whether or not freelancers are required to register a company depends on the
                                        legislation of each country and perhaps the residence status of the person.
                                        However, it is recommended to register a company to keep the business finances
                                        and private finances apart. For this reason, many freelancers set up a simple
                                        Sole Proprietorship or some other lightweight company form.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    4. Can you freelance with no experience?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, of course! However, building your skillset alongside your business is
                                        extremely challenging. But it can be done! The fastest way to get started is to
                                        work with a senior freelancer as an apprentice of sorts. Also lightweight
                                        mentoring can help to avoid the typical pitfalls at the beginning which allows
                                        you to reach notable income sooner than if going completely solo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    5. Is freelancing easy for students?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>It is easy to start freelancing as a student but it is difficult to get notable
                                        income from it. This is because every client will know that the freelancer is
                                        not yet a professional and will not trust significant tasks to be executed by
                                        students. Therefore, almost all student freelancers get simple lowly paid
                                        assignments that could be handed to just about anyone else.</p>
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
