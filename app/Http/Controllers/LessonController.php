<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lesson = Lesson::all();
        if($lesson->count() > 0){
            return $this->success($lesson, "Lesson data!");
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
            'course_id'=>'required',
            'title'=>'required',
            'overview'=>'',
            'description'=>'',
            'status'=>'',
            'image'=>'',
            'index'=>'',
            'recommended'=>'',
            'paid'=>'',
            'level'=>''
        ]);

        $lesson = new Lesson;
        $lesson->fill($data);
        if($lesson->save()){
            return $this->success($lesson, "Lesson Saved Successfully!");
        }else{
            return $this->error("Lesson not saved!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        if($lesson){
            return $this->success($lesson, "Lesson data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        $data = $request->validate([
            'course_id'=>'',
            'title'=>'',
            'overview'=>'',
            'description'=>'',
            'status'=>'',
            'image'=>'',
            'index'=>'',
            'recommended'=>'',
            'paid'=>'',
            'level'=>''
        ]);
        $lesson->fill($data);
        if($lesson->save()){
            return $this->success($lesson, "Lesson Updated Successfully!");
        }else{
            return $this->error("Lesson not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        if($lesson && $lesson->delete()){
            return $this->success($lesson, "Lesson Deleted Successfully!");
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
            $data = $request->image->move('storage/lesson', $name);
            $out = "/storage/lesson/" . $name;
        };

        if(true){
            return $this->success($out, "Lesson Image Uploaded!");
        }else{
            return $this->error("Not Deleted!");
        }
    }


}
