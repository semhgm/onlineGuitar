<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Page;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        $pages = Page::all(); // Veritabanından sayfaları çekiyoruz

        $message_count=Contact::count();
        return view('admin.pages.app', compact('pages','message_count')); // View'e 'pages' değişkeni ile gönderiyoruz

    }



    public function edit($id)
    {
        $page = Page::find($id); // İlgili id'ye sahip sayfayı buluyoruz
        $message_count=Contact::count();

        if (!$page) {
            return redirect()->route('pages.index',compact('message_count'))->with('error', 'Sayfa bulunamadı.');
        }

        return view('admin.pages.update', compact('page','message_count')); // 'update.blade.php' görünümüne sayfa verisini gönderiyoruz
    }



    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        if (!$page) {
            return redirect()->route('admin.pages.index')->with('error', 'Sayfa bulunamadı.');
        }

        // Verileri validasyon ile güncelleyelim
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->save();

        return redirect()->route('admin.pages.index')->with('success', 'Sayfa başarıyla güncellendi.');
    }
    public function app()
    {
        return view('admin.pages.app');
    }
    public function about()
    {
        $message_count=Contact::count();
        return view('admin.pages.about',compact('message_count'));
    }


}
