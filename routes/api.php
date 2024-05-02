<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/penduduk", [PendudukController::class, "show"]);
Route::get("/pembayaran", [PendudukController::class, "pembayaran"]);
Route::get("/virtual-account", [PendudukController::class, "virtualAccount"]);
