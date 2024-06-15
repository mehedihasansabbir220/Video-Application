<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [VideoController::class, 'allVideos'])->name('welcome');
Route::get('/videos/search', [VideoController::class, 'search'])->name('videos.search');
Route::resource('videos', VideoController::class);
