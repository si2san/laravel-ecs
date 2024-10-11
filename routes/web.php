<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/health-check', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Health check passed',
    ]);
});
