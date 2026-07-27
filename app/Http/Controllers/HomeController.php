<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}
