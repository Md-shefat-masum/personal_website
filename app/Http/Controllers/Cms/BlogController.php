<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function create()
    {
        if(!request()->auth){
            return redirect('/');
        }
        return view('cms.blog.create_blog');
    }

    public function store()
    {
        $json_source = public_path("blog_files/web_development.json");
        $string = file_get_contents($json_source);
        $contents = json_decode($string, true);

        $temp = [
            "id" => uniqid().time(),
            "title" => request()->title,
            "slug" => Str::slug(request()->title),
            "date" => request()->date,
            "writer" => request()->writer,
            "seo_title" => request()->seo_title,
            "seo_keywords" => slug(request()->seo_keywords),
            "seo_description" => request()->seo_description,
            "image_meta" => request()->image_meta,
            "image" => "",
            "description" => request()->description,
        ];

        if(request()->hasFile('image')){
            $temp["image"] = Storage::putFileAs('blog_files/images',request()->file('image'),Str::slug(request()->title).'.'.request()->file('image')->extension());
        }

        array_unshift($contents, $temp);
        file_put_contents($json_source, json_encode($contents));

        return redirect()->back();
    }
}
