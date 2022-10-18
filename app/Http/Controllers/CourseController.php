<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        if($courses->count() > 0){
            return $this->success($courses, "Courses data!");
        }else{
            return $this->error("Not Found!");
        }
    }
    public function courselist()
    {
        $courses = Course::orderBy('id', 'DESC')->get();
        return view('admin.courses.index',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=> 'required',
            'description'=> '',
            'status' => '',
            'image' => '',
        ]);

        $course = new Course;
        $course->fill($data);
        if($course->save()){
            return $this->success($course, "Course Saved Successfully!");
        }else{
            return $this->error("Course not saved!");
        }
        
    }
    public function submit(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> '',
            'status' => '',
            'image' => '',
        ]);

        $course = new Course;
        if($request->hasFile('image')){
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/category', $name);
            $out = "/storage/category/" . $name;
            $course->image=$out;
        };
        $course->title=$request->title;
        $course->description=$request->description;
        if($course->save()){
            return redirect()->back()->with("success","Course Add Successfully!");
        }else{
            return redirect()->back()->with("error","Course not saved!");
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        if($course){
            return $this->success($course, "Course data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Course $course, Request $request)
    {
        $data = $request->validate([
            'title'=> '',
            'description' => '',
            'status' => '',
            'image'=> '',
        ]);

        $course->fill($data);
        if($course->save()){
            return $this->success($course, "Course Updated Successfully!");
        }else{
            return $this->error("Course not updated!");
        }
    }
    public function updatecourse(Request $request,$id)
    {
        $data = $request->validate([
            'title'=> '',
            'description' => '',
            'status' => '',
            'image'=> '',
        ]);

        $course=Course::find($id);
        $course->title=$request->title;
        $course->description=$request->description;
        if($request->hasFile('image')){
            $image_path = public_path($course->image); 
            if (isset($course->image) && file_exists($image_path)) {
                unlink($image_path);
            }
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/category', $name);
            $out = "/storage/category/" . $name;
            $course->image=$out;
        };

        if($course->save()){
            return redirect()->route('courses-index')->with("success","Course Updated Successfully!");
        }else{
            return redirect()->route('courses-index')->with("error","Course not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if($course && $course->delete()){
            return $this->success($course, "Course Deleted Successfully!");
        }else{
            return $this->error("Already Deleted!");
        }
    }
    public function delete($id)
    {
        $course = Course::find($id);
        if($course && $course->delete()){
            return redirect()->back()->with('success','Course deleted successfully');
        }else{
            return redirect()->back()->with('error','Failed to delete course');
        }
    }
    public function status($id,$status)
    {
        $course = Course::find($id);
        $course->status=$status;
        if($course->update()){
            return redirect()->back()->with('success','Status change successfully');
        }else{
            return redirect()->back()->with('error','Failed to change status');
        }
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.courses.edit',compact('course'));
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
            $data = $request->image->move('storage/category', $name);
            $out = "/storage/category/" . $name;
        };

        if(true){
            return $this->success($out, "Course Image Uploaded!");
        }else{
            return $this->error("Not Deleted!");
        }
    }

}
