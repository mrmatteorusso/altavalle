<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

Route::get('/webcams', function () {return view('webcams');});
Route::get('/passes', function () {return view('passes');});
Route::get('/lifts', function () {return view('lifts');});
Route::get('/meteo', function () {return view('meteo');});

Route::get('/',[ EventController::class, 'index']);
Route::get('/events/create',[ EventController::class, 'create']);
Route::post('/events',[ EventController::class, 'store']);

Route::get('/events/show/{id}',[ EventController::class, 'show']);
Route::get('/events/{event}/edit',[ EventController::class, 'edit']);
Route::patch('/events/{event}',[ EventController::class, 'update']);
Route::delete('/events/{event}',[ EventController::class, 'destroy']);


Route::get('/{area}', [EventController::class, 'showByArea']);
// Route::get('/{season}', [EventController::class, 'showBySeason']);
