<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $option = Option::all();
        if($option->count() > 0){
            return $this->success($option, "Options data!");
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

        $option = new Option;
        $option->fill($data);
        if($option->save()){
            return $this->success($option, "Option Saved Successfully!");
        }else{
            return $this->error("Option not saved!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option)
    {
        if($option){
            return $this->success($option, "Option data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Option $option)
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
        $option->fill($data);
        if($option->save()){
            return $this->success($option, "Option Updated Successfully!");
        }else{
            return $this->error("Option not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $option = Option::find($id);
        if($option && $option->delete()){
            return $this->success($option, "Option Deleted Successfully!");
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
            $data = $request->image->move('storage/option', $name);
            $out = "/storage/option/" . $name;
        };

        if(true){
            return $this->success($out, "Option Image Uploaded!");
        }else{
            return $this->error("Not Deleted!");
        }
    }

    
}
