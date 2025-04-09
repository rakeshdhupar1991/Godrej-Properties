<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PropertyController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PropertiesController;

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

//Welcome
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/properties', [PropertiesController::class, 'properties'])->name('properties');

// routes/web.php
Route::get('/properties', function () {
    return view('pages.properties');
})->name('properties');


/*Route::get('/properties', function () {
    return view('pages.properties'); // This will return the about.blade.php view
});*/

// Home Page
//Route::get('/', [PageController::class, 'home'])->name('home');

route::get('/index',[TemplateController::class,'index']);
route::get('/property',[PropertyController::class,'property']);