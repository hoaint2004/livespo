<?php

use App\Http\Controllers\RecognizeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recognize', [RecognizeController::class, 'index'])->name('recognize');
Route::get('/post-recognize', [RecognizeController::class, 'post_recognize'])->name('post_recognize');