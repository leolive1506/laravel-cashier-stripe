<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function pay(Request $request)
    {
        $stripePriceId = 'price_1P7FDVDu7umbU96b9AnsCYkC';
        $quantity = 1;

        /** @var User $user */
        $user = $request->user();

        return $user->newSubscription('defaul', $stripePriceId)
            // ->trialDays(5)
            ->checkout( [
                'success_url' => route('checkout.success'),
                'cancel_url' => route('checkout.cancel'),
            ]);
    }
}
