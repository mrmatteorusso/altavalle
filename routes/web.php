<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/',[ EventController::class, 'index']);
