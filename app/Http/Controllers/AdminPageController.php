<?php

namespace App\Http\Controllers;
use App\Models\Page;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        $pages = Page::all(); // Veritabanından sayfaları çekiyoruz

        return view('admin.pages.app', compact('pages')); // View'e 'pages' değişkeni ile gönderiyoruz


    }



    public function edit($id)
    {
        $page = Page::find($id); // İlgili id'ye sahip sayfayı buluyoruz
        if (!$page) {
            return redirect()->route('pages.index')->with('error', 'Sayfa bulunamadı.');
        }

        return view('admin.pages.update', compact('page')); // 'update.blade.php' görünümüne sayfa verisini gönderiyoruz
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
        return view('admin.pages.about');
    }


}
