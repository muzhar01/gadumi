<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercise = Exercise::all();
        if($exercise->count() > 0){
            return $this->success($exercise, "Exercise data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'lesson_id'=>'required',
            'title'=>'required',
            'content'=>'',
            'description'=>'',
            'translation'=>'',
            'status'=>'',
            'image'=>'',
            'index'=>''
        ]);

        $exercise = new Exercise;
        $exercise->fill($data);
        if($exercise->save()){
            return $this->success($exercise, "Exercise Saved Successfully!");
        }else{
            return $this->error("Exercise not saved!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        if($exercise){
            return $this->success($exercise, "Exercise data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercise $exercise)
    {
        $data = $request->validate([
            'lesson_id'=>'required',
            'title'=>'required',
            'content'=>'',
            'description'=>'',
            'translation'=>'',
            'status'=>'',
            'image'=>'',
            'index'=>''
        ]);
        $exercise->fill($data);
        if($exercise->save()){
            return $this->success($exercise, "Exercise Updated Successfully!");
        }else{
            return $this->error("Exercise not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        if($exercise && $exercise->delete()){
            return $this->success($exercise, "Exercise Deleted Successfully!");
        }else{
            return $this->error("Already Deleted!");
        }
    }

    /**
     * upload image to storage.
     */
    public function upload(Request $request)
    {
        $request->validate([
            'image'=> 'required|image'
        ]);

        if($request->hasFile('image')){
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/exercise', $name);
            $out = "/storage/exercise/" . $name;
        };

        if(true){
            return $this->success($out, "Course Image Uploaded!");
        }else{
            return $this->error("Not Deleted!");
        }
    }


}
