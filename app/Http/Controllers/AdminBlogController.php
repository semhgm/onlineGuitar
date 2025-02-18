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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->input('content');

        // Görsel yükleme işlemi
        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $filename);
            $post->image = $filename;
        }
        $post->save();

        return redirect()->route('admin.blog')->with('success', 'Blog yazısı başarıyla eklendi!');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->image && file_exists(public_path('uploads/' . $post->image))) {
            unlink(public_path('uploads/' . $post->image));
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

        $post->title = $request->title;
        $post->content = $request->input('content');



        if ($request->hasFile('image')) {
            // Eski görseli sil
            if ($post->image && file_exists(public_path('uploads/' . $post->image))) {
                unlink(public_path('uploads/' . $post->image));
            }

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $filename);
            $post->image = $filename;
        }


        $post->save();
        return redirect()->route('admin.blog')->with('success', 'Blog yazısı başarıyla güncellendi!');
    }




}
