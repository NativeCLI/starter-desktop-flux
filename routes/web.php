<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/openInBrowser', function () {
    nativephp_openInBrowser('https://nativecli.com/');
    dd('here');

    //return redirect()->back();
})->name('openInBrowser');
