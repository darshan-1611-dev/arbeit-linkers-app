@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/faq.css") }}">
@endpush

@section("body")
    <!-- Terms and Conditions  -->
    <section>
        <div class="container">
            <h2>User Agreement</h2>
            <p>This User Agreement describes the terms and conditions which you accept by using our Website or our
                Services. We have incorporated by reference some linked information.
            </p>
            <br>
            <br>
            <div class="mb-5">
                <h4>1. Overview</h4>
                <p>By accessing the Website, you agree to the following terms with Freelancer.</p>
                <br>
                <p>We may amend this User Agreement and any linked information from time to time by posting amended
                    terms on
                    the Website, without notice to you.
                </p>
                <p>The Website is an online venue where Users buy and sell Seller Services and items. Buyers and Sellers
                    must register for an Account in order to buy or sell Seller Services and/or items. The Website
                    enables
                    Users to work together online to complete and pay for Projects, buy and sell items and to use the
                    services that we provide. We are not a party to any contractual agreements between Buyer and Seller
                    in
                    the online venue, we merely facilitate connections between the parties.

                </p>
            </div>
            <div class="mb-5">
                <h4>2.Scope</h4>
                <p>Before using the Website, you must read the whole User Agreement, the Website policies and all linked
                    information.
                </p>
                <p>You must read and accept all of the terms in, and linked to, this User Agreement, the Code of
                    Conduct,
                    the Freelancer Privacy Policy and all Website policies. By accepting this User Agreement as you
                    access
                    our Website, you agree that this User Agreement will apply whenever you use the Website, or when you
                    use
                    the tools we make available to interact with the Website. Some Websites may have additional or other
                    terms that we provide to you when you use those services.
                </p>
            </div>
            <div class="mb-5">
                <h4>3. Intellectual Property Rights Infringement</h4>
                <p>It is our policy to respond to clear notices of alleged intellectual property rights infringement.
                    Our
                    Copyright Infringement Policy is designed to make submitting notices of alleged infringement to us
                    as
                    straightforward as possible while reducing the number of notices that we receive that are fraudulent
                    or
                    difficult to understand or verify. If you believe that your Intellectual Property Rights have been
                    violated, please notify us via this link on our Website and we will investigate.
                </p>
            </div>
            <div class="mb-5">
                <h4>4. User Services</h4>
                <p>You authorise us, directly or through third parties, to make any inquiries we consider necessary to
                    validate your identity. You must, at our request: (1) provide further information to us, which may
                    include your date of birth and or other information that will allow us to reasonably identify you;
                    (2)
                    take steps to confirm ownership of your email address or financial instruments; or (3) verify your
                    information against third party databases or through other sources.
                </p>
                <p>You must also, at our request, provide copies of identification documents (such as your passport or
                    driver's licence). We may also ask you to provide photographic identification holding your
                    identification together with a sign with a code that we provide as an additional identity
                    verification
                    step. We also reserve the right to request a video interview with you to validate this information,
                    your
                    identity, your background and your skills.
                </p>
            </div>
            <div class="mb-5">
                <h4>5. Feedback</h4>
                <p>
                    If you have any questions about this User Agreement or if you wish to report breaches of this User
                    Agreement, please contact us by using our customer support at
                    <a href="{{ url('/contact-us') }}" style="color: blue;">Contact Us.</a>
                </p>

            </div>
        </div>

    </section>
@endsection
