<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
