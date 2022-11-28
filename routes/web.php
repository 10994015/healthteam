<?php

use App\Http\Livewire\Add;
use App\Http\Livewire\Cms;
use App\Http\Livewire\Finish;
use App\Http\Livewire\Home;
use App\Http\Livewire\Input;
use App\Http\Livewire\Start;
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

Route::get('/', Home::class);
Route::post('/start', Start::class);
Route::post('/input', Input::class);
Route::get('/finish', Finish::class);
Route::post('/add', Add::class);
Route::get('/cms', Cms::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
