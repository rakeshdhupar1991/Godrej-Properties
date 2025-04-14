<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PropertyController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\Admin\PropertyControllerAdmin;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\ProjectHighlightController;
use \App\Http\Controllers\Admin\LocationAdvantageController;

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

    Route::get('configuration/create', [ConfigurationController::class, 'create'])->name('configuration.create');
    Route::post('configuration/store', [ConfigurationController::class, 'store'])->name('configuration.store');
    
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');

    Route::get('/create', [PropertyControllerAdmin::class, 'create'])->name('create');
    Route::post('/store', [PropertyControllerAdmin::class, 'store'])->name('store');

    Route::resource('configuration', ConfigurationController::class);

    // ✅ Add this for amenities resource routes
    Route::resource('amenities', AmenityController::class);

    Route::resource('project_highlights', ProjectHighlightController::class);

    Route::resource('location_advantages', LocationAdvantageController::class);
});