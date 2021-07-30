<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class OrdersControllerApi extends Controller
{
    public function Orders(Request $request)
    {
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->tokenStripe,
                "description" => "Test payment"
            ]);
        } catch (\Exception $e) {
            dd("Error husreca:" + $e);
        }
    }
}
