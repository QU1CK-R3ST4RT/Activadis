<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'LoggedIn'],function () {
    Route::get('/', function () { return view('welcome'); });
    Route::get("/events", [EventController::class, 'index']);
    Route::get("/event/{event}", [EventController::class, 'event']);

    Route::get('/create', function () { return view('create-model'); });
    Route::post("/create", [EventController::class, 'store']);

    Route::get("/events/{event}/edit", [EventController::class, 'editing']);
    Route::post("/events/{event}/edit", [EventController::class, 'edit']);

    Route::get("/users/{user}/delete", [UserController::class, 'delete']);

    Route::get("/events/{event}/delete", [EventController::class, 'delete']);
    Route::get("/events/{event}/join", [ReservationController::class, 'store']);
    Route::get("/events/{event}/leave", [ReservationController::class, 'delete']);
    Route::get("/events/{event}/details", [EventController::class, 'details']);
});

Route::get("/logout", [UserController::class, 'logout']);
Route::get("/login", [UserController::class, 'index']);
Route::post("/login", [UserController::class, 'login']);
