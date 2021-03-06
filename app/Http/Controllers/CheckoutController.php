<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {   

        if(auth()->user()->is_admin == 1){
            return redirect()->route('admin_home');
        }


        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('use-your-stripe-key-here');
        		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent'));

    }

    public function afterPayment()
    {
        if(auth()->user()->is_admin == 1){
            return redirect()->route('admin_home');
        }
        echo 'Payment Has been Received';
    }
}
