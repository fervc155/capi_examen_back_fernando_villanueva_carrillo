<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
 


Route::middleware('DisableCors')->get('/', [UserController::class, 'index']);