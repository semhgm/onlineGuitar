<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.layout.admin');
    }
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }


}
