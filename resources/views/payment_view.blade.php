<style>
    .razorpay-payment-button{
        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        border-radius: 0.25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        color: #fff;
        background-color: #dc3545;
        border: 1px solid #dc3545;
    }
</style>

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
