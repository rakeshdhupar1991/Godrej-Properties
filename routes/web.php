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

Route::get('/location/{city}', [PropertiesController::class, 'properties']);
