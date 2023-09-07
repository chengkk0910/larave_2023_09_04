<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/students', function () {
//     return view('student.index');
// });

// 學生資料
// 自訂single action 放下面
Route::resource('students', StudentController::class);
Route::get('/students_test', [StudentController::class, 'test'])->name('students.test');
Route::get('/students_export', [StudentController::class, 'export']);

// 老師資料
Route::resource('teachers', TeacherController::class);
