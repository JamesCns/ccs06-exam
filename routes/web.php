<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route:: get('/begin', [StudentController::class, 'start'] );
Route:: post('/enter-grades', [StudentController::class, 'studentGrades'] );





// Route::get('/', function () {
//     return view('welcome');
// });
