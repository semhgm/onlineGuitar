<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function app()
    {
        return view('admin.pages.app');
    }
}
