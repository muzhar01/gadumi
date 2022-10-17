<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
    public function lessonList()
    {
        $lessons = Lesson::all();
        return view('admin.lesson.index',compact('lessons'));
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
    public function submitLesson(Request $request)
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
            return redirect('/lesson')->with('success',"Course Add Successfully!");
        }else{
            return redirect('/lesson')->with('error',"Failed to add course");
        }
    }

    /**
     * Display the specified resource.
     */
    public function addlesson(Lesson $lesson)
    {
        $courses=Course::where('status','1')->get();
        return view('admin.lesson.create',compact('courses'));
    }
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
    public function changeStatus($id,$status){
        $lesson = Lesson::find($id);
        $lesson->status=$status;
        if($lesson->update()){
            return redirect()->back()->with('success','Status change successfully');
        }else{
            return redirect()->back()->with('error','Failed to change status');
        }
    }
    public function deleteLesson($id)
    {
        $lesson = Lesson::find($id);
        if($lesson && $lesson->delete()){
            return redirect()->back()->with('success','Lesson deleted successfully');
        }else{
            return redirect()->back()->with('error','Failed to delete lesson');
        }
    }
    public function editLesson($id)
    {
        $lesson = Lesson::find($id);
        $courses=Course::where('status','1')->get();
        return view('admin.lesson.edit',compact('lesson','courses'));
    }
    public function updateLesson(Request $request,$id)
    {
        $request->validate([
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
        $lesson=Lesson::find($id);
        $lesson->course_id=$request->course_id;
        $lesson->title=$request->title;
        $lesson->overview=$request->overview;
        $lesson->description=$request->description;
        $lesson->recommended=$request->recommended;
        $lesson->level=$request->level;
        if($lesson->update()){
            return redirect('/lesson')->with('success',"Lesson Updated Successfully!");
        }else{
            return redirect('/lesson')->with('error',"Lesson not updated");
        }
    }
}
