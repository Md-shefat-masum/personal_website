<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }

    public function blog()
    {
        return view('frontend.pages.blog.blogs');
    }

    public function courses()
    {
        return view('frontend.pages.course.courses');
    }

    public function single_course($title)
    {
        $string = file_get_contents(public_path("courses/$title.json"));
        $course_contents = json_decode($string, true);

        return view('frontend.pages.course.course_detials',compact('course_contents'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
