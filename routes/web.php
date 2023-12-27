<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
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
