<form action="{{ route('razorpay.payment.store') }}" method="POST">
    @csrf
    <script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="{{ env('RAZORPAY_KEY') }}"
            data-amount="{{ $amount }}"
            data-buttontext="{{ $payment_text }}"
            data-name="{{ url('/') }}"
            data-description="ArbeitLinkers"
            data-image="{{ asset('/images/logo-black-svg.svg') }}"
            data-button_theme="brand-color"
            data-prefill.name="name"
            data-prefill.email="email"
            data-theme.color="#090B3D">
    </script>

    <input type="hidden" name="job_id" value="{{ $job_id }}">
    <input type="hidden" name="receiver_id" value="{{ $receiver_id }}">
</form>
