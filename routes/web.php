<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\official\OCarController;
use App\Http\Controllers\official\OBikeController;
use App\Http\Controllers\official\OStoreController;
use App\Http\Controllers\citizen\HCitizenController;
use App\Http\Controllers\official\OOneCupController;
use App\Http\Controllers\official\OBottlesController;
use App\Http\Controllers\official\OCitizenController;
use App\Http\Controllers\official\HOfficialController;

    Route::prefix('/')->group(function(){
        Route::view('/', 'home.index')->name('h.index');
        // Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth')->name('redirect'); - Przekierowanie po zalogowaniu
    });

    Route::prefix('/urzednik')/*->middleware('officialcheck')*/->group(function(){
        Route::controller(HOfficialController::class)->name('o.')->group(function(){
            Route::get('/', 'dashboard')->name('dashboard');
            Route::get('/ustawienia', 'settings')->name('settings');
            Route::get('/profil', 'profile')->name('profile');
        });

        Route::resource('/mieszkancy', OCitizenController::class, ['names' => [
            'index' => 'o.citizens.index', 'create' => 'o.citizens.create', 'store' => 'o.citizens.store', 'show' => 'o.citizens.show', 'edit' => 'o.citizens.edit', 'update' => 'o.citizens.update', 'destroy' => 'o.citizens.destroy',
        ]]);

        Route::resource('/ladowarki', OCarController::class, ['names' => [
            'index' => 'o.cars.index', 'create' => 'o.cars.create', 'store' => 'o.cars.store', 'show' => 'o.cars.show', 'edit' => 'o.cars.edit', 'update' => 'o.cars.update', 'destroy' => 'o.cars.destroy',
        ]]);
        Route::resource('/rowery', OBikeController::class, ['names' => [
            'index' => 'o.bikes.index', 'create' => 'o.bikes.create', 'store' => 'o.bikes.store', 'show' => 'o.bikes.show', 'edit' => 'o.bikes.edit', 'update' => 'o.bikes.update', 'destroy' => 'o.bikes.destroy',
        ]]);

        Route::resource('/onecup', OOneCupController::class, ['names' => [
            'index' => 'o.onecup.index', 'create' => 'o.onecup.create', 'store' => 'o.onecup.store', 'show' => 'o.onecup.show', 'edit' => 'o.onecup.edit', 'update' => 'o.onecup.update', 'destroy' => 'o.onecup.destroy',
        ]]);

        Route::resource('/butelki', OBottlesController::class, ['names' => [
            'index' => 'o.bottles.index', 'create' => 'o.bottles.create', 'store' => 'o.bottles.store', 'show' => 'o.bottles.show', 'edit' => 'o.bottles.edit', 'update' => 'o.bottles.update', 'destroy' => 'o.bottles.destroy',
        ]]);

        Route::resource('/sklep', OStoreController::class, ['names' => [
            'index' => 'o.store.index', 'create' => 'o.store.create', 'store' => 'o.store.store', 'show' => 'o.store.show', 'edit' => 'o.store.edit', 'update' => 'o.store.update', 'destroy' => 'o.store.destroy',
        ]]);
    });
        Route::prefix('/mieszkaniec')/*->middleware('officialcheck')*/->name('c.')->group(function(){
            Route::controller(HCitizenController::class)->group(function(){
                Route::get('/', 'dashboard')->name('dashboard');
                Route::get('/profil', 'profile')->name('profile');
                Route::get('/ustawienia', 'settings')->name('settings');
                Route::get('/auta', 'cars')->name('cars');
                Route::get('/kupki', 'cups')->name('cups');
                Route::get('/rower', 'bike')->name('bike');
                Route::get('/sklep', 'store')->name('store');
            });




/* Route::controller(OBikeController::class)->group(function(){
            Route::resource('/rowery', OBikeController::class)

        }); */




        // Route::resource('/urzednik', OBikeController::class);
    });



