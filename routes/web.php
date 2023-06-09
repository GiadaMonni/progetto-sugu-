<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubblicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PubblicController::class, 'homepage'])->name('homepage');

Route::get('/categoria/{category}', [PubblicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/nuovo/annuncio',[AnnouncementController::class,'createAnnouncement']
)->middleware('auth')->name('announcements.create');

Route::get('/dettaglio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');

Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnuncement'])->name('announcements.index');

// home revisor
Route::get('/revisor/home', [RevisorController::class, 'indexRevisor'])->middleware('isRevisor')->name('revisor.index');

Route::PATCH('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

Route::PATCH('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

Route::get('/richiesta/revisore',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');

// Route::get('/revisor/undo', [RevisorController::class,'undo'])->name('revisor_undo');


