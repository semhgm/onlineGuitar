<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminContactController extends Controller
{
    public function contact(){
        $contacts = Contact::all(); // Tüm kayıtları al
        $message_count=Contact::count();
        return view('admin.pages.contact', compact('contacts','message_count'));
    }


    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $toEmail = 'serhat12522@gmail.com';
        $message = $request->input('message');
        $name = $request->input('name');
        $email = $request->input('email');


        try {
            // Mail gönderme işlemi
            Mail::to($toEmail)->send(new ContactFormMail($message));

            // Veritabanına kaydetme
            Contact::create([
                'name' => $name,
                'email' => $email,
                'message' => $message,
            ]);

            return response()->json(['success' => true, 'message' => 'Mesajınız başarıyla gönderildi!']);
        } catch (\Exception $e) {
            // Hata mesajını JSON olarak döndürme
            return response()->json(['success' => false, 'message' => 'Mesaj gönderimi başarısız oldu, lütfen tekrar deneyin.']);
        }
    }



}
