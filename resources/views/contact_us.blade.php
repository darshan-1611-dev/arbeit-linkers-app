@extends('layout.main')

@section("body")
    <!-- Hero Section Start -->
    <section class="banner px-5">
        <div class="container py-5 px-md-0">
            <div class="row align-items-center my-5 py-5">
                <div class="col-12 col-md-6">
                    <h2 class="">We are always available for 24*7</h2>
                    <h3 class="">For Your Business</h3>
                    <p class="">You can contact us by filling out the form on our website, and we will respond to your
                        inquiry as soon as possible. Alternatively, you can email us directly at info@arbitelinkers.com,
                        or reach out to us on social media.</p>
                    <a href="{{ url('/') }}" class="btn al-btn mt-5">Get Freelancers</a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="container">
                        <figure>
                            <img src="{{ asset('images/Banner/contact_banner.svg') }}" alt="banner">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Us Section Start -->
    <section>
        <div class="container mb-5 pb-5">
            <h2 class="text-center">Contact Us</h2>
            <div class="row g-5">
                <div class="col-sm-6  d-sm-block">
                    <div>
                        <h4>Address</h4>
                        <p>62/2 H Colony Polytechnic Ambavadi, Near Nehrunagar,</p>
                        <p>Ahmadabad, Gujarat, India. 380015</p>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>info@arbitelinkers.com</p>
                    </div>
                    <div>
                        <h4>Mobile No</h4>
                        <p>+91 640217 13558</p>
                    </div>
                    <div>
                        <h4>Phone No</h4>
                        <p> 079 2274 8741</p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="ps-lg-5 ">

                        <div style="margin-bottom: 20px">
                            @if(\Illuminate\Support\Facades\Session::has("success"))
                                <p class="text-success">{{ \Illuminate\Support\Facades\Session::get("success") }}</p>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>
                                                <span class="text-danger fs-5">* {{ $error }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <form action="{{ url('contact-us/store') }}" method="post">
                            @csrf
                            <div>
                                <div class="mb-3">
                                    <input type="text" class="form-control fs-4 py-3" name="first_name"
                                           value="{{ old('first_name') }}" placeholder="First Name">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control fs-4 py-3" name="last_name"
                                           value="{{ old('last_name') }}" placeholder="Last Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control fs-4 py-3" value="{{ old('email') }}"
                                           name="email"
                                           placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                <textarea class="form-control fs-4 py-3" name="message"
                                          placeholder="Message" rows="5"
                                          style="resize: none;">{{ old('message') }}</textarea>
                                </div>
                                <button type="submit" class="btn al-btn my-4 w-25">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End -->
@endsection
