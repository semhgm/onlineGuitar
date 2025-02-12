<?php

namespace App\Http\Controllers;
use App\Models\Page;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $OnlineMusicEducation=Page::find(3);
        $WhatWeDo=Page::find(4);
        $PerformanceAndActivities=Page::find(5);
        $Mission=Page::find(6);
        $Goals=Page::find(7);
        $Courses=Page::find(8);
        $Contact=Page::find(9);
        $CallUs=Page::find(10);
        $Adress=Page::find(11);
        $BusinessHours=Page::find(12);
        $FooterContent1=Page::find(13);
        $FooterContent2=Page::find(14);
        $FooterContent3=Page::find(15);


        return view('front.index',compact('OnlineMusicEducation','WhatWeDo',
            'PerformanceAndActivities','Mission','Goals','Courses','Contact','CallUs','Adress','BusinessHours'
            ,'FooterContent1','FooterContent2','FooterContent3'));
    }

    public function about()
    {
        $AboutMe=Page::find(16);
        $Contact=Page::find(10);
        $AboutMe2=Page::find(18);
        $FooterContent1=Page::find(13);
        $FooterContent2=Page::find(14);
        $FooterContent3=Page::find(15);

        return view('front.about',compact('AboutMe','Contact','AboutMe2','FooterContent1','FooterContent2','FooterContent3'));
    }

    public function services()
    {
        $ProfessionalMusicEducation=Page::find(19);
        return view('front.services',compact('ProfessionalMusicEducation'));
    }

    public function blog()
    {
        $MyBlog=Page::find(20);
        $FooterContent1=Page::find(13);
        $FooterContent2=Page::find(14);
        $FooterContent3=Page::find(15);
        return view('front.blog',compact('MyBlog','FooterContent1','FooterContent2','FooterContent3'));
    }

    public function courses()
    {
        $Courses=Page::find(21);
        $FooterContent1=Page::find(13);
        $FooterContent2=Page::find(14);
        $FooterContent3=Page::find(15);
        return view('front.courses',compact('Courses','FooterContent1','FooterContent2','FooterContent3'));
    }

    public function contact()
    {
        $FooterContent1=Page::find(13);
        $FooterContent2=Page::find(14);
        $FooterContent3=Page::find(15);
        return view('front.contact',compact('FooterContent1','FooterContent2','FooterContent3'));
    }
}
