<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    //
    public function blog(){
        return view('admin.pages.blog');
    }
}
