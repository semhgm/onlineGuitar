<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    //

    public function index(){
        $courses = Course::all(); // Tüm blog yazılarını al
        $message_count=Contact::count();
        return view('admin.pages.courses', compact('courses','message_count'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'drive_link' => 'required|',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $courses = new Course();
        $courses->title = $request->title;
        $courses->description = $request->description;
        $courses->drive_link = $request->drive_link;

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $filename);
            $courses->image = $filename;
        }

        $courses->save();
        return redirect()->route('admin.courses')->with('success', 'Kurs başarıyla eklendi.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $message_count=Contact::count();
        return view('admin.pages.courses_edit', compact('course','message_count'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'drive_link' => 'required|',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $courses = Course::findOrFail($id);
        $courses->title = $request->title;
        $courses->description = $request->input('description');
        $courses->drive_link = $request->input('drive_link');

        // Görsel güncelleme işlemi
        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $filename);
            $courses->image = $filename;
        }

        $courses->save();
        return redirect()->route('admin.courses')->with('success', 'Kurs başarıyla güncellendi.');
    }



    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses')->with('success', 'Kurs başarıyla silindi.');
    }




}
