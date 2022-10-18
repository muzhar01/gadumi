<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercise = Exercise::all();
        if ($exercise->count() > 0) {
            return $this->success($exercise, "Exercise data!");
        } else {
            return $this->error("Not Found!");
        }
    }
    public function exerciseList()
    {
        $exercises = Exercise::orderBy('id', 'DESC')->get();
        return view('admin.exercise.index', compact('exercises'));
    }
    public function addExercise()
    {
        $lessons = Lesson::where('status', '1')->get();
        return view('admin.exercise.create', compact('lessons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'lesson_id' => 'required',
            'title' => 'required',
            'content' => '',
            'description' => '',
            'translation' => '',
            'status' => '',
            'image' => '',
            'index' => ''
        ]);

        $exercise = new Exercise;
        $exercise->fill($data);
        if ($exercise->save()) {
            return $this->success($exercise, "Exercise Saved Successfully!");
        } else {
            return $this->error("Exercise not saved!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        if ($exercise) {
            return $this->success($exercise, "Exercise data!");
        } else {
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercise $exercise)
    {
        $data = $request->validate([
            'lesson_id' => 'required',
            'title' => 'required',
            'content' => '',
            'description' => '',
            'translation' => '',
            'status' => '',
            'image' => '',
            'index' => ''
        ]);
        $exercise->fill($data);
        if ($exercise->save()) {
            return $this->success($exercise, "Exercise Updated Successfully!");
        } else {
            return $this->error("Exercise not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        if ($exercise && $exercise->delete()) {
            return $this->success($exercise, "Exercise Deleted Successfully!");
        } else {
            return $this->error("Already Deleted!");
        }
    }

    /**
     * upload image to storage.
     */
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/exercise', $name);
            $out = "/storage/exercise/" . $name;
        };

        if (true) {
            return $this->success($out, "Course Image Uploaded!");
        } else {
            return $this->error("Not Deleted!");
        }
    }
    public function submitExercise(Request $request)
    {
        $data = $request->validate([
            'lesson_id' => 'required',
            'title' => 'required',
            'content' => '',
            'description' => '',
            'translation' => '',
            'status' => '',
            'image' => '',
            'index' => ''
        ]);
        $exercise = new Exercise();
        if($request->hasFile('image')){
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/exercise', $name);
            $out = "/storage/exercise/" . $name;
            $exercise->image=$out;
        };
        $exercise->title=$request->title;
        $exercise->lesson_id=$request->lesson_id;
        $exercise->content=$request->content;
        $exercise->description=$request->description;
        if ($exercise->save()) {
            return redirect('/admin/exercise')->with('success', "Exercise Added Successfully!");
        } else {
            return redirect('/admin/exercise')->with('error', "Exercise not added");
        }
    }
    public function changeExercise($id, $status)
    {
        $lesson = Exercise::find($id);
        $lesson->status = $status;
        if ($lesson->update()) {
            return redirect()->back()->with('success', 'Status change successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to change status');
        }
    }
    public function deleteExercise($id)
    {
        $lesson = Exercise::find($id);
        if ($lesson && $lesson->delete()) {
            return redirect()->back()->with('success', 'Lesson deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete lesson');
        }
    }
    public function editExercise($id)
    {
        $exercise = Exercise::find($id);
        $lessons = Lesson::where('status', '1')->get();
        return view('admin.exercise.edit', compact('lessons', 'exercise'));
    }
    public function updateExercise(Request $request,$id)
    {
        $data = $request->validate([
            'lesson_id' => 'required',
            'title' => 'required',
            'content' => '',
            'description' => '',
            'translation' => '',
            'status' => '',
            'image' => '',
            'index' => ''
        ]);
        $exercise=Exercise::find($id);
        if($request->hasFile('image')){
            $image_path = public_path($exercise->image); 
            if (isset($exercise->image) && file_exists($image_path)) {
                unlink($image_path);
            }
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/exercise', $name);
            $out = "/storage/exercise/" . $name;
            $exercise->image=$out;
        };
        $exercise->lesson_id=$request->lesson_id;
        $exercise->title=$request->title;
        $exercise->content=$request->content;
        $exercise->description=$request->description;

        if ($exercise->save()) {
            return redirect('/admin/exercise')->with('success', "Exercise Updated Successfully!");
        } else {
            return redirect('/admin/exercise')->with('error', "Failed to Update Exercise");
        }
    }
}
