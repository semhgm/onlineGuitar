<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function settings(){
        $message_count = Contact::count();
        return view('admin.pages.userSettings',compact('message_count'));
    }

}
