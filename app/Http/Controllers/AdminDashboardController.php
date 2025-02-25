<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        // Her admin sayfasında mesaj sayısını göstermek için
        $this->middleware(function ($request, $next) {
            $message_count = Contact::count();
            view()->share('message_count', $message_count);
            return $next($request);
        });
    }

    public function index()
    {
        $data = [
            'post_count' => Post::count(),
            'message_count' => Contact::count(),
            'course_count' => Course::count(),
            'service_count' => Service::count(),
        ];

        return view('admin.pages.dashboard', $data);
    }
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }


}
