<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ProcessController;
use App\Http\Controllers\Admin\TechController;
use App\Http\Controllers\Admin\WhatController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\OurClientController;
use App\Http\Controllers\Admin\JobOpeningController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\MeetOurTeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Frontend\IndexController;

use App\Models\Solution;
use App\Models\WhatWeDo;
use App\Models\Proces;
use App\Models\Technology;
use App\Models\Image;
use App\Models\OurClient;
use App\Models\JobOpening;
use App\Models\FAQ;
use App\Models\MeetOurTeam;
use App\Models\Testimonial;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[IndexController::class,'home']);

Auth::routes(['register'=>false]);



// Admin Panel
Route::group(['middleware'=>'auth','prefix'=>'dashboard'],function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/solution',SolutionController::class);
    Route::resource('/whatwedo',WhatController::class);
    Route::resource('/process',ProcessController::class);
    Route::resource('/image',ImageController::class);
    Route::resource('/technology',TechController::class);
    Route::resource('/ourclient',OurClientController::class);
    Route::resource('/jobopening',JobOpeningController::class);
    Route::resource('/faq',FAQController::class);
    Route::resource('/meetourteam',MeetOurTeamController::class);
    Route::resource('/testimonial',TestimonialController::class);
    Route::resource('/contactus',ContactUsController::class);
}
);

// Frontend Portions
Route::get('/home',[IndexController::class,'home'])->name('home');
Route::get('/about',[IndexController::class,'about'])->name('about');
Route::get('/career',[IndexController::class,'career'])->name('career');
Route::get('/services',[IndexController::class,'services'])->name('services');
Route::get('/webdev',[IndexController::class,'webdev'])->name('webdev');

// Frontend - Contact Form (admin panel)
Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::post('/contact/store',[IndexController::class,'contact_store'])->name('contactUs.store');

// Frontend - Mail
Route::post('/home',[IndexController::class,'contactus'])->name('contactUs.send');
Route::post('/contact',[IndexController::class,'consultation'])->name('consultation.send');

// For Privacy Policy in footer
Route::get('/policy',[IndexController::class,'privatePolicy'])->name('policies');




