<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function about()
    {
        \SEO::setTitle("AgroSword - About us");
        return view('pages.about');
    }

    public function contact()
    {
        \SEO::setTitle("AgroSword - Contact Us");
        return view('pages.contact');
    }

    public function privacy()
    {
        \SEO::setTitle("AgroSword - Privacy Policy");
        return view('pages.privacy');
    }

    public function terms()
    {
        \SEO::setTitle("AgroSword - Terms and Conditions");
        return view('pages.terms');
    }
}
