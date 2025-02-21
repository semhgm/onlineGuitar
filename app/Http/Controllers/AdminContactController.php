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
        return view('admin.pages.contact', compact('contacts'));
    }


    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $toEmail = 'semihgms65@gmail.com';
        $message = $request->input('message');
        $name = $request->input('name');
        $email = $request->input('email');

        // Mail gönderme
        try {
            // Mail gönderme işlemi
            Mail::to($toEmail)->send(new ContactFormMail($message));

            // Veritabanına kaydetme
            Contact::create([
                'name' => $name,
                'email' => $email,
                'message' => $message,
            ]);

            // Başarı durumunda geri dönüş
            return back()->with('success', 'Mesajınız başarıyla gönderildi!');
        } catch (\Exception $e) {
            // Hata durumunda geri dönüş
            return back()->with('error', 'Mesaj gönderimi başarısız oldu, lütfen tekrar deneyin.');
        }


    }



}
