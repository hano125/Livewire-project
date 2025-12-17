<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


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
    Route::view('/dashboard', 'backend.dashboard')->middleware('auth:admin')->name('dashboard');
    //=============================== SETTINGS Pages ===================//
    Route::view('/settings', 'backend.Settings.index')->middleware('auth:admin')->name('settings');
    //=============================== PROFILE Pages ===================//
    Route::view('/skills', 'backend.skills.index')->middleware('auth:admin')->name('skills');
});
// });

require __DIR__ . '/auth.php';
