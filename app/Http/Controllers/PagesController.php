<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        $title = "TechNewsdex";
        $subtitle = "HotNews";
        return view('pages.landing', 
        compact('title', 'subtitle'));
    }

    public function welcome()
    {
        return view('pages.welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

        public function index()
    {
        return view('pages.index');
    }

    public function blog()
    {
        return view('pages.blog');
    }

        public function ReportUs()
    {
        return view('pages.ReportUs');
    }

        public function profile()
    {
        $first_name = "Mom";
        $last_name = "Yudaya";
        $full_name = "Mom Yudaya";
        $major = "Computer Science";
        $subject = "Web Framework";
        return view('pages.profile', 
        compact('first_name', 'last_name', 'full_name', 'major', 'subject'));
    }
}