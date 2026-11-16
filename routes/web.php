<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tanya-relawan', function () {
    return view('tanya-relawan');
})->name('tanya-relawan');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/tentang-kami', function () {
    return redirect('/tentang');
});

Route::get('/panduan-detail', function () {
    return view('panduan-detail');
})->name('panduan.detail');

Route::get('/panduan/{slug?}', function () {
    return view('panduan-detail');
})->name('panduan.show');
