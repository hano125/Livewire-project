<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//-------------------Frontend Routes-------------------//
Route::prefix('/')->name("front.")->group(function () {
    //=============================== INDEX Pages ===================//
    Route::view('/', 'frontend.index')->name('index');
    //=============================== ABOUT Pages ===================//
    Route::view('/about', 'frontend.about')->name('about');
    //=============================== CONTACT Pages ===================//
    Route::view('/contact', 'frontend.contact')->name('contact');
    //=============================== PROJECTS Pages ===================//
    Route::view('/projects', 'frontend.projects')->name('projects');
    //=============================== SERVICE Pages ===================//
    Route::view('/service', 'frontend.service')->name('service');
    //=============================== TEAM Pages ===================//
    Route::view('/team', 'frontend.team')->name('team');
    //=============================== TESTIMONIAL Pages ===================//
    Route::view('/testimonial', 'frontend.testimonial')->name('testimonial');
});


//===================================backend Routes===================//

Route::prefix('admin')->name('admin.')->group(function () {
    //=============================== DASHBOARD Pages ===================//
    Route::view('/dashboard', 'backend.dashboard')->name('dashboard');
});
