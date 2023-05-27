<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubblicController;
use App\Http\Controllers\AnnouncementController;

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
Route::get('/', [PubblicController::class, 'homepage'])->name('homepage');

Route::get('/categoria/{category}', [PubblicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio',[AnnouncementController::class,'createAnnouncement']
)->middleware('auth')->name('announcements.create');


