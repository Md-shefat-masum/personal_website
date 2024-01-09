<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group( ['prefix'=>'', 'namespace' =>'App\Http\Controllers' ],function(){
    Route::get('/','FrontendController@index')->name('frontend_index');
    Route::get('/about','FrontendController@about')->name('frontend_about');
    Route::get('/contact','FrontendController@contact')->name('frontend_contact');
    Route::get('/portfolio','FrontendController@portfolio')->name('frontend_portfolio');
    Route::get('/courses','FrontendController@courses')->name('frontend_courses');
});

Auth::routes();

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
