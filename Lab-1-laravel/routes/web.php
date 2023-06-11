<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InterestsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LearningController;


Route::get('/', [MainController::class, "indexAction"])->name('main');
Route::get('/main', [MainController::class, "indexAction"])->name('main');
Route::get('/about', [AboutController::class, "indexAction"])->name('about');
Route::get('/contacts', [ContactsController::class, "indexAction"])->name('contacts');
Route::get('/gallery', [GalleryController::class, "indexAction"])->name('gallery');
Route::get('/history', [HistoryController::class, "indexAction"])->name('history');
Route::get('/interests', [InterestsController::class, "indexAction"])->name('interests');
Route::get('/test', [TestController::class, "indexAction"])->name('test');
Route::get('/learning', [LearningController::class, "indexAction"])->name('learning');
