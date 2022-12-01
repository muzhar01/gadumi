<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProgressController;
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

Route::get('courses',[CourseController::class,'index']);
Route::get('lessons',[LessonController::class,'index']);
Route::get('lesson/{id}',[LessonController::class,'detail']);
Route::get('exercise/{id}',[ExerciseController::class,'exercise']);
Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('userData',[UserController::class,'index']);
    Route::post('updateProfile',[UserController::class,'update']);
    Route::post('changePassword',[UserController::class,'changePassword']);
    Route::post('deleteAccount',[UserController::class,'deleteAccount']);

});
Route::get('/setting',[SettingController::class,'indexjson']);
Route::post('progressStore/',[UserProgressController::class,'store']);
Route::get('/countProgress/{id}',[UserProgressController::class,'count']);