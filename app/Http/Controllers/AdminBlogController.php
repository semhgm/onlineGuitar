<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminBlogController extends Controller
{
    //
    public function blog()
    {
        $posts = Post::all(); // Tüm blog yazılarını al
        return view('admin.pages.blog', compact('posts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Resim validasyonu
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public'); // Uploads dizinine kaydet
        }

        Post::create($data);

        return redirect()->route('admin.blog')->with('success', 'Blog yazısı başarıyla eklendi!');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->image) {
            Storage::disk('public')->delete($post->image); // Görsel varsa sil
        }

        $post->delete();

        return redirect()->route('admin.blog')->with('success', 'Blog yazısı başarıyla silindi!');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id); // İstediğimiz blog yazısını al
        return view('admin.pages.blog_edit', compact('post'));
    }

    /**
     * Blog Yazısını Güncelle
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only('title', 'content');

        // Eğer yeni bir resim yüklenmişse:
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image); // Eski resmi sil
            }
            $data['image'] = $request->file('image')->store('uploads', 'public'); // Yeni resmi kaydet
        }

        $post->update($data); // Blog yazısını güncelle
        return redirect()->route('admin.blog')->with('success', 'Blog yazısı başarıyla güncellendi!');
    }




}
