<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SurveyController::class, 'index'])->name('index');
Route::get('/survey', [SurveyController::class, 'survey'])->name('survey');
Route::post('/survey', [SurveyController::class, 'submit'])->name('survey.submit');
Route::get('/thanks', [SurveyController::class, 'thanks'])->name('thanks');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/console', [AdminController::class, 'console'])->name('admin.console');
