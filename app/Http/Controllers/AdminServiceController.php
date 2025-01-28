<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminServiceController extends Controller
{

public function services(){
    return view('admin.pages.services');
}

}
