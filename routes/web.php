<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin/login',[AdminController::class,'login'])->name('admin-login');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
// Courset Routes
Route::controller(CourseController::class)->prefix('courses')->name('courses-')->group(function () {
    Route::get('/', 'courselist')->name('index');
    Route::post('/', 'submit')->name('store');
    Route::get('/{id}/{status}', 'status')->name('status');
    Route::get('/{id}', 'edit')->name('edit');
});
Route::get('/{id}/delete', [CourseController::class,'delete'])->name('delete-course');
Route::post('/{id}/update', [CourseController::class,'updatecourse'])->name('update-course');

// Lesson Routes
Route::get('/lesson', [LessonController::class,'lessonList'])->name('lesson-index');
Route::get('/lesson/add', [LessonController::class,'addlesson'])->name('add-lesson');
Route::post('/lesson/submit', [LessonController::class,'submitLesson'])->name('submit-lesson');
Route::get('/lesson/delete/{id}', [LessonController::class,'deleteLesson'])->name('lesson-delete');
Route::get('/lesson/{id}/{status}', [LessonController::class,'changeStatus'])->name('lesson-status');
Route::get('/lesson/{id}', [LessonController::class,'editLesson'])->name('lesson-edit');
Route::post('/lesson/update/{id}', [LessonController::class,'updateLesson'])->name('update-lesson');

//Exercise Route
Route::get('/exercise',[ExerciseController::class,'exerciseList'])->name('exercise-index');
Route::get('/exercise/add',[ExerciseController::class,'addExercise'])->name('add-exercise');
Route::post('/exercise/submit',[ExerciseController::class,'submitExercise'])->name('submit-exercise');
Route::get('/exercise/delete/{id}', [ExerciseController::class,'deleteExercise'])->name('exercise-delete');
Route::get('/exercise/{id}/{status}', [ExerciseController::class,'changeExercise'])->name('exercise-status');
Route::get('/exercise/{id}', [ExerciseController::class,'editExercise'])->name('exercise-edit');
Route::post('/exercise/update/{id}', [ExerciseController::class,'updateExercise'])->name('update-exercise');
Route::get('/', [FrontController::class, 'index']);
Route::get('/cmd/{cmd}', [FrontController::class, 'cmd']);
