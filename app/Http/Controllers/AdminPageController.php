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


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $page = new Page(); // Page modeli üzerinden işlem yapıyoruz
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        return response()->json(['message' => 'Sayfa eklendi!']);
    }


    public function edit($id)
    {
        $page = Page::findOrFail($id); // ID ile Page modelini buluyoruz
        return response()->json($page);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $page = Page::findOrFail($id); // Hedef Page kaydını buluyoruz
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        return response()->json(['message' => 'Sayfa güncellendi!']);
    }


    public function destroy($id)
    {
        Page::destroy($id); // ID'sine göre Page kaydını siliyoruz
        return response()->json(['message' => 'Sayfa silindi!']);
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
