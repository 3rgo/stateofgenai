<?php

declare(strict_types=1);

use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('landing');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');
Route::view('/contact', 'contact')->name('contact');

Route::get('/survey/{surveyType}', SurveyController::class)->name('survey');
