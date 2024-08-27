<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkflowController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('workflows', WorkflowController::class);