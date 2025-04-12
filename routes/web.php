<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PropertyController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\Admin\PropertyControllerAdmin;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/properties/{city}', [PropertiesController::class, 'location']);
Route::get('/property/{id}', [PropertyDetailController::class, 'show']);
Route::get('/property-image/{id}', [PropertyDetailController::class, 'getImage'])->name('property.image');



//Admin 
Route::get('/admin/master-entry', [AdminController::class, 'createMasterData'])->name('admin.master-entry');
Route::post('/admin/master-entry', [AdminController::class, 'storeMasterData'])->name('admin.master-entry.store');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/admin/configuration/create', [ConfigurationController::class, 'create'])->name('admin.configuration.create');
    Route::post('/admin/configuration/store', [ConfigurationController::class, 'store'])->name('admin.configuration.store');

    Route::get('/create', [PropertyControllerAdmin::class, 'create'])->name('create');
    Route::post('/store', [PropertyControllerAdmin::class, 'store'])->name('store');
});