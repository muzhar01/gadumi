<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProgress;
use Illuminate\Http\Request;

class UserProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function count($id)
    {
        $user=User::find($id);
        $completed_lesson=$user->userProgress()->count();
        if($completed_lesson > 0){
            return $this->success($completed_lesson, "Exercise List!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model=UserProgress::where('user_id',$request->user_id)->where('lesson_id',$request->lesson_id)->first() ?? new UserProgress();
        $model->user_id=$request->user_id;
        $model->lesson_id=$request->lesson_id;
        $model->total_exercise=$request->total_exercise;
        $model->progress=$request->progress;
        $model->save();
        return "Added successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function show(UserProgress $userProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProgress $userProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProgress $userProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProgress $userProgress)
    {
        //
    }
}
