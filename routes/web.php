<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', [TeacherController::class, 'index']);

Route::resource('/teacher', TeacherController::class);

    