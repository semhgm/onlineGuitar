<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function services()
    {
        return view('front.services');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function courses()
    {
        return view('front.courses');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
