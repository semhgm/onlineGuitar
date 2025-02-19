<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    //

    public function courses(){
        $courses = Course::all(); // Tüm blog yazılarını al
        return view('admin.pages.courses', compact('courses'));
    }
    public function store()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }


}
