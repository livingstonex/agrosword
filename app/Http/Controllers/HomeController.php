<?php

namespace App\Http\Controllers;

use App\Project;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        \SEO::setTitle("AgroSword - User Dashboard");
        return view(
            'home',
            [
                'user' => auth()->user()->with('investments')->withCount('investments')->get()->first(),
                'projects' => Project::all()
            ]
        );
    }
}
