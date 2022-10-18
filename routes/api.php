<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PlanController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
    return [
        "message"=> "Logout Successfully."
    ];
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'register']);

Route::group(['prefix'=>'admin'], function(){
    Route::resource('/course', CourseController::class);
    Route::post('/course/upload', [CourseController::class, 'upload']);
    Route::resource('/exercise', ExerciseController::class);
    Route::post('/exercise/upload', [ExerciseController::class, 'upload']);
    Route::resource('/lesson', LessonController::class);
    Route::post('/lesson/upload', [LessonController::class, 'upload']);
    Route::resource('/option', OptionController::class);
    Route::post('/option/upload', [OptionController::class, 'upload']);
    Route::resource('/question', QuestionController::class);
    Route::post('/question/upload', [OptionController::class, 'upload']);
    Route::resource('/plan', PlanController::class);
    
});
