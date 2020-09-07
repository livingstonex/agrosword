<?php

namespace App\Http\Controllers;

use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $investment = auth()->user()->investments()->create([
            'number_of_stock' => $paymentDetails['data']['metadata']['stock'],
            'project_id' => $paymentDetails['data']['metadata']['projectid'],
        ]);

        $total = $investment->project->amount_per_stock * $investment->number_of_stock;
        return redirect()->route('home')->with(
            'status',
            "Congratulations! You have successfully sponsored {$investment->number_of_stock} stocks of {$investment->project->name} Project for ₦{$total}"
        );
    }
}
