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
        $string = file_get_contents(public_path("blogs/web_development.json"));
        $contents = json_decode($string, true);
        return view('frontend.pages.blog.blogs',compact('contents'));
    }

    public function blog_details($slug)
    {
        $string = file_get_contents(public_path("blogs/web_development.json"));
        $contents = json_decode($string, true);
        $content = (object) [];

        for ($i=0; $i < count($contents); $i++) {
            if(strcmp( $contents[$i]['slug'] , $slug) != 0){
                $content = (object) $contents[$i];
                break;
            }
        }
        return view('frontend.pages.blog.blog_details',compact('content'));
    }

    public function courses()
    {
        return view('frontend.pages.course.courses');
    }

    public function single_course($title, $content_title = null)
    {
        $string = file_get_contents(public_path("courses/$title.json"));
        $course_contents = json_decode($string, true);

        return view('frontend.pages.course.course_detials',compact('course_contents','title','content_title'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
