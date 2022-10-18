<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    if(auth()->check()){
        return redirect()->route('dashboard');
    }
    return view('login');
});

Route::post('/login', [LoginController::class,'index'])
->name('login');

Route::get('/dashboard', function () {
    return "Dashboard Page";
})->name('dashboard');


Route::get('/logout',[LoginController::class,'logout'])
    ->name('logout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
