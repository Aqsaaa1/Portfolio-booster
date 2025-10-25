<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/verify/{email}', [AuthController::class, 'showVerifyForm'])->name('verify.form');
Route::post('/verify', [AuthController::class, 'verify'])->name('verify');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');



Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login')->with('success', 'You have been logged out.');
})->name('logout');

Route::get('/', function () {
    return view('index');
})->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/templates', [PortfolioController::class, 'templates'])->name('templates');
    Route::get('/templates/preview/{id}', [PortfolioController::class, 'preview'])->name('templates.preview');
    Route::get('/portfolio/edit/{template_id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('/portfolio/update/{template_id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio/view/{id}', [PortfolioController::class, 'view'])->name('portfolio.view');


    Route::get('/portfolio/form/{template}', [PortfolioController::class, 'form'])->name('portfolio.form');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/view/{id}', [PortfolioController::class, 'portfolioview'])->name('portfolio.view');
    Route::post('/send-portfolio-link', [PortfolioController::class, 'sendPortfolioLink'])->name('portfolio.sendLink');

 
    Route::get('/portfolio/shared/{id}', [PortfolioController::class, 'sharedView'])->name('portfolio.shared');

});





Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/templates', function () {
    return view('Templates');
})->name('templates');

Route::get('/testimonial', function () {
    return view('Testimonial');
})->name('testimonial');

Route::get('/work', function () {
    return view('work');
})->name('work');

Route::get('/FAQs', function () {
    return view('FAQ');
})->name('faqs');
