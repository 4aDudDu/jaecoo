<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/overview-j8', function () {
    return view('pages/overview-j8');
});
Route::get('/overview-j7', function () {
    return view('pages/overview-j7');
});
Route::get('/teknologi', function () {
    return view('pages/teknologi');
});
Route::get('/keistimewaan', function () {
    return view('pages/keistimewaan');
});
Route::get('/penawaran', function () {
    return view('pages/tawaran');
});
Route::get('/dealer', function () {
    return view('pages/dealer');
});
Route::get('/credit', function () {
    return view('pages/kredit');
});
Route::get('/the-luxury-of-silence-among-the-city-noise', function () {
    return view('pages/post-one');
});
Route::get('/new-records-markets-and-superhybrids', function () {
    return view('pages/post-two');
});
Route::get('/omoda-and-jaecoo-set-new-standard-of-hybrids-with-SHS-technology', function () {
    return view('pages/post-three');
});
Route::get('/service', function () {
    return view('pages/service');
});

