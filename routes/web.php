<?php

use App\Http\Controllers\Imap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laminas\Mail\Storage\Pop3;
use Laminas\Mail\Storage;

Auth::routes();

Route::group([
    'prefix' => '',
    'namespace' => 'App\Http\Controllers',
    'middleware' => ['doNotCacheResponse']
], function () {

    Route::get('/cache/{image_name}', 'FrontendController@image')->where('image_name','.*');

    Route::get('/', 'FrontendController@index')->name('frontend_index')->middleware('doNotCacheResponse');
    Route::get('/cache-home', 'FrontendController@index_cache');
    // ->middleware('cacheResponse:60000');

    Route::get('/about', 'FrontendController@about')->name('frontend_about');
    Route::get('/contact', 'FrontendController@contact')->name('frontend_contact');
    Route::get('/portfolio', 'FrontendController@portfolio')->name('frontend_portfolio');

    Route::get('/blog', 'FrontendController@blog')->name('frontend_blog');
    Route::get('/blog/{slug}', 'FrontendController@blog_details')->name('frontend_blog_details');

    Route::get('/all-courses', 'FrontendController@courses')->name('frontend_courses');
    Route::get('/courses/{title}', 'FrontendController@single_course')->name('frontend_single_course');
    Route::get('/courses/{title}/{content_title?}', 'FrontendController@single_course')->name('frontend_single_course_content');

    Route::group(['prefix' => 'email'], function () {
        Route::get('/', 'Email\EmailController@email');

        Route::get('/total', 'Email\EmailController@total_email');
        Route::get('/list', 'Email\EmailController@list');
        Route::get('/read', 'Email\EmailController@read');
    });
});

Route::group(['prefix' => 'cms', 'namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/create', 'Cms\BlogController@create');
        Route::post('/create', 'Cms\BlogController@store');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/all', function () {
    function getAllFiles($folderPath)
    {
        $fileList = [];
        $files = scandir($folderPath);

        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
                if (is_file($filePath)) {
                    $fileList[] = $filePath;
                } elseif (is_dir($filePath)) {
                    $fileList = array_merge($fileList, getAllFiles($filePath));
                }
            }
        }

        return $fileList;
    }

    // Example usage
    $folderPath = public_path('assets/website/assets/js');
    $files = getAllFiles($folderPath);
    $arr = "";
    foreach ($files as $file) {
        echo "'$file', <br>";
    }
});
