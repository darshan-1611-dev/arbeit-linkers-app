<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Payment;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @param Request $request
     * @return response()
     */
    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount'], 'currency' => 'INR'));

                // add details tp payment table
                Payment::query()->create([
                    'payment_id' => $response['id'],
                    'sender_id' => auth()->user()->id,
                    'receiver_id' => $input['receiver_id'],
                    'job_id' => $input['job_id'],
                    'currency' => $response['currency'],
                    'amount' => $response['amount'] / 100,
                    'status' => $response['status'],
                    'method' => $response['method']
                ]);

                // update users revenue
                $user_revenue = User::query()->find($input['receiver_id']);
                $user_revenue->revenue += $response['amount'] / 100;
                $user_revenue->save();

                // change payment status
                $job_payment_status = Job::query()->find($input['job_id']);
                $job_payment_status->payment_status = '1'; // payment successfully done
                $job_payment_status->save();

            } catch (Exception $e) {

                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success_payment', 'Payment successful');
        return redirect()->back();
    }
}
