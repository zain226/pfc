<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs()
    {
        return view('frontend/about');
    }
    public function serviceDetails()
    {
        return view('frontend/service_details');
     }
    public function contactUs()
    {
        return view('frontend/contact');
    }
    public function faqs()
    {
        return view('frontend/faqs');
    }
}
