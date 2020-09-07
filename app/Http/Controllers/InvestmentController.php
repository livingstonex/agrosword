<?php

namespace App\Http\Controllers;

use App\Investment;

class InvestmentController extends Controller
{
    public function index()
    {
        \SEO::setTitle("AgroSword - All investments");
        $investments = Investment::paginate(10);
        return view('investments.index', compact('investments'));
    }

    public function show($id)
    {
        \SEO::setTitle("AgroSword - Investment");
        $investment = Investment::findOrFail($id);
        return view('investments.show');
    }
}
