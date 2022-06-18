<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Http\Request;
use App\Models\User;
class RazorpayController extends Controller
{
    public function payWithRazorpay()
    {        
        return view('payWithRazorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'user_id' => Auth::id(),
                   'amount' => $request->amount,
                ];
                
        Payment::insertGetId($payInfo);  

        $users = User::find(Auth::id());
        $users->pay_status = 'complete';
        $users->save();
        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
    }

}
