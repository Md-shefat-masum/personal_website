<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function image($image_name)
    {
        $file_name = public_path($image_name);
        $filePath = Storage::drive('public')->get($image_name);

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file_name);
        $lastModified = filemtime($file_name);
        finfo_close($finfo);

        if (strpos($image_name, '.css')) {
            $mimeType = "text/css; charset=UTF-8";
        } else if (strpos($image_name, '.js')) {
            $mimeType = "application/javascript";
        } else if (strpos($image_name, '.ico')) {
            $mimeType = "image/vnd.microsoft.icon";
        } else if (strpos($image_name, '.svg')) {
            $mimeType = "image/svg+xml";
        }
        // dd($image_name, $mimeType, strpos($image_name, '.css'));
        $headers = [
            'Content-Type' => $mimeType,
            'Cache-Control' => 'public, max-age=86400',
            'Expires' => gmdate('D, d M Y H:i:s \G\M\T', time() + 86400),
            'Last-Modified' => gmdate('D, d M Y H:i:s \G\M\T', $lastModified),
        ];

        return response()->make($filePath, 200, $headers);
    }

    public function index()
    {
        $view = Redis::get('home_page');
        // $view = view('frontend.home')->render();
        return response()->make($view, 200, [
            "Content-Type" => "text/html; charset=UTF-8",
            'Cache-Control' => 'public, max-age=86400',
        ]);
        return view('frontend.home');
    }

    public function index_cache()
    {
        $view = view('frontend.home')->render();
        $view = str_replace("\\a", "", $view);
        $view = str_replace("\r", "", $view);
        $view = str_replace("\n", "", $view);
        $view = str_replace("    ", "", $view);
        Redis::set('home_page', $view);
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
        $string = file_get_contents(public_path("blog_files/web_development.json"));
        $contents = json_decode($string, true);
        return view('frontend.pages.blog.blogs', compact('contents'));
    }

    public function blog_details($slug)
    {
        $string = file_get_contents(public_path("blog_files/web_development.json"));
        $contents = json_decode($string, true);
        $content = (object) [];

        $index = array_search($slug, array_column($contents, 'slug'));
        if ($index !== false) {
            $content = (object) $contents[$index];
        }
        return view('frontend.pages.blog.blog_details', compact('content'));
    }

    public function courses()
    {
        return view('frontend.pages.course.courses');
    }

    public function single_course($title, $content_title = null)
    {
        $string = file_get_contents(public_path("courses/$title.json"));
        $course_contents = json_decode($string, true);

        return view('frontend.pages.course.course_detials', compact('course_contents', 'title', 'content_title'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
