<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.home');
    }

    public function contact()
    {
        return view('contact.contact');
    }

    public function profile()
    {
        return view('profile.profile');
    }

    public function faq()
    {
        return view('faq.faq');
    }
}
