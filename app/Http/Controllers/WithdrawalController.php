<?php

namespace App\Http\Controllers;

class WithdrawalController extends Controller
{
    public function create()
    {
        \SEO::setTitle("AgroSword - Make Withdrawal");
        return view('withdrawal.create');
    }

    public function store()
    {
        $amt = config('app.min_withdrawal');
        if (request('amount') < $amt) {
            return back()->with('status', "You cannot withdraw less than {$amt}");
        }
        //To-Do: Continue with the withdrawal. Deposit the money to the guy via paystack API
    }
}
