<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::post('/contact-us/submit', [App\Http\Controllers\Contactus::class, 'submitContact'])->name('home');
Route::post('/contact-us/submitContactForm', [App\Http\Controllers\Contactus::class, 'submitContactForm'])->name('home');

