@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/faq.css") }}">
    <style>
        .data ul li {
            font-size: 1.5rem;
            list-style: inside;
        }

        .data ul li span {
            font-weight: 500;
        }
    </style>
@endpush


@section("body")
    <!-- Terms and Conditions  -->
    <section>
        <div class="container">
            <h2>Privacy Policy</h2>
            <div>
                <h3 class="mb-5">The types of personal information we collect and hold
                </h3>
                <p>We collect personal information about our users in order provide our products, services, and customer
                    support. Our products, services, and customer support are provided through many platforms including
                    but
                    not limited to: websites, phone apps, email, and telephone. The specific platform and product,
                    service,
                    or support you interact with may affect the personal data we collect.</p>
                <br>
                <p>In some situation users may provide us with personal information without us asking for it, or through
                    means not intended for the collection of particular types of information. Whilst we may take
                    reasonable
                    steps to protect this data, the user will have bypassed our systems, processes, and control and thus
                    the
                    information provided will not be governed by this privacy policy.
                </p>
                <p>In some situations users may provide us personal information over platforms that are outside our
                    control;
                    for example through social media or forums. Whilst any information collected by us is governed by
                    this
                    Privacy Policy, the platform by which it was communicated will be governed by its own Privacy
                    Policy.
                </p>
            </div>
            <hr class="my-5">
            <div>
                <h3 class="mb-5">How we collect personal information</h3>
                <h5 class="mb-4">Information that you specifically give us</h5>
                <p>While you use our products and services you may be asked to provide certain types of personal
                    information. This might happen through our website, applications, online chat systems, telephone,
                    paper
                    forms, or in-person meetings. We will give you a Collection Notice at the time, to explain how we
                    will
                    use the personal information we are asking for. The notice may be written or verbal.
                </p>
                <p>We may request, collect, or process the following information:
                </p>
                <div class="data">
                    <ul>
                        <li><span>Account Details</span> - username, password, profile picture.</li>
                        <li><span>Contact Details</span> - email address, phone number.</li>
                        <li><span>Location Details</span> - physical address, billing address, timezone.
                        </li>
                        <li><span>Identity Details</span> - full name, proof of identity (e.g. drivers licence,
                            passport),
                            proof of address (e.g. utility bill), photograph of the user.
                        </li>
                        <li><span>User Generated Content </span> - project descriptions and attachments, bid
                            description,
                            user profiles, user reviews, contest descriptions and attachment, user messages etc.
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-5">
            <div>
                <h3 class="mb-5">To contact our Privacy Officer
                </h3>
                <p>If you have an enquiry or a complaint about the way we handle your personal information, or to seek
                    to
                    exercise your privacy rights in relation to the personal information we hold about you, you may
                    contact
                    our Privacy Officer as follows:

                </p>
                <!-- <a href="contact_us.html" style="color: blue;">By Mail</a> -->

                <div class="mt-4">
                    <h6>By Mail:</h6>
                    <a href="mailto:gautamsavsaviya17@gmail.com?subject:" class="text-primary">contactus@arbeitlinkers.com</a>
                </div>
                <div class="mt-4">
                    <h6>By Our CustomerCare Number:</h6>
                    <p>99033912953</p>
                </div>
            </div>
        </div>

    </section>
@endsection
