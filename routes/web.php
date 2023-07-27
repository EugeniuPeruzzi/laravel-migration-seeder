<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController as PageController;
use App\Http\Controllers\Guest\BonusController as BonusController;


Route::get('/', [PageController::class, 'index']) -> name('home');
