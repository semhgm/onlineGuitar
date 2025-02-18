<?php

namespace App\Http\Controllers;
use App\Models\Page;

use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $OnlineMusicEducation=Page::find(1);
        $WhatWeDo=Page::find(2);
        $PerformanceAndActivities=Page::find(3);
        $Mission=Page::find(4);
        $Goals=Page::find(5);
        $Courses=Page::find(6);
        $Contact=Page::find(7);
        $CallUs=Page::find(8);
        $Adress=Page::find(9);
        $BusinessHours=Page::find(10);
        $FooterContent1=Page::find(11);
        $FooterContent2=Page::find(12);
        $FooterContent3=Page::find(13);


        return view('front.index',compact('OnlineMusicEducation','WhatWeDo',
            'PerformanceAndActivities','Mission','Goals','Courses','Contact','CallUs','Adress','BusinessHours'
            ,'FooterContent1','FooterContent2','FooterContent3'));
    }

    public function about()
    {
        $AboutMe=Page::find(14);
        $Contact=Page::find(8);
        $AboutMe2=Page::find(15);
        $FooterContent1=Page::find(11);
        $FooterContent2=Page::find(12);
        $FooterContent3=Page::find(13);

        return view('front.about',compact('AboutMe','Contact','AboutMe2','FooterContent1','FooterContent2','FooterContent3'));
    }

    public function services()
    {
        $ProfessionalMusicEducation=Page::find(16);
        $FooterContent1=Page::find(11);
        $FooterContent2=Page::find(12);
        $FooterContent3=Page::find(13);
        $services=Service::all();
        return view('front.services',compact('ProfessionalMusicEducation','services' ,'FooterContent1','FooterContent2','FooterContent3'));
    }

    public function blog()
    {
        $MyBlog=Page::find(17);
        $FooterContent1=Page::find(11);
        $FooterContent2=Page::find(12);
        $FooterContent3=Page::find(13);
        $posts=Post::all();
        return view('front.blog',compact('MyBlog','FooterContent1','FooterContent2','FooterContent3','posts'));
    }

    public function courses()
    {
        $Courses=Page::find(18);
        $FooterContent1=Page::find(11);
        $FooterContent2=Page::find(12);
        $FooterContent3=Page::find(13);
        return view('front.courses',compact('Courses','FooterContent1','FooterContent2','FooterContent3'));
    }

    public function contact()
    {
        $FooterContent1=Page::find(11);
        $FooterContent2=Page::find(12);
        $FooterContent3=Page::find(13);
        return view('front.contact',compact('FooterContent1','FooterContent2','FooterContent3'));
    }
}
