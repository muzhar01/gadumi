<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = Question::all();
        if($question->count() > 0){
            return $this->success($question, "Question data!");
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

        $question = new Question;
        $question->fill($data);
        if($question->save()){
            return $this->success($question, "Question Saved Successfully!");
        }else{
            return $this->error("Question not saved!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        if($question){
            return $this->success($question, "Question data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
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
        $question->fill($data);
        if($question->save()){
            return $this->success($question, "Question Updated Successfully!");
        }else{
            return $this->error("Question not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        if($question && $question->delete()){
            return $this->success($question, "Question Deleted Successfully!");
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
            $data = $request->image->move('storage/question', $name);
            $out = "/storage/question/" . $name;
        };

        if(true){
            return $this->success($out, "Course Image Uploaded!");
        }else{
            return $this->error("Not Deleted!");
        }
    }

}
