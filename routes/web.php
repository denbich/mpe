<?php

use Illuminate\Support\Facades\Route;

    Route::prefix('/')->group(function(){
        Route::view('/', 'home.index')->name('h.index');
    });

    Route::prefix('/urzednik')->middleware([])->group(function(){

    });
    Route::prefix('/mieszkaniec')->middleware([])->group(function(){

    });
