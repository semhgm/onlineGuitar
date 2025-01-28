<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function contact(){
        return view('admin.pages.contact');
    }
}
