<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\staticController;
use App\Http\Controllers\UsefulLinkController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about',[staticController::class , 'about'])->name('about');
Route::get('/contact',[staticController::class , 'contact'])->name('contact');


Route::resource('usefulLink', UsefulLinkController::class)->except(['show']);
Route::get('/usefulLink/display', [UsefulLinkController::class, 'display'])->name('usefulLink.display');


Route::resource('course', CourseController::class)->except(['show']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
