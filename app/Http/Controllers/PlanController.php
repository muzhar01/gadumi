<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plan = Plan::all();
        if($plan->count() > 0){
            return $this->success($plan, "Plan data!");
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

        $plan = new Plan;
        $plan->fill($data);
        if($plan->save()){
            return $this->success($plan, "Plan Saved Successfully!");
        }else{
            return $this->error("Plan not saved!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        if($plan){
            return $this->success($plan, "Plan data!");
        }else{
            return $this->error("Not Found!");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
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
        $plan->fill($data);
        if($plan->save()){
            return $this->success($plan, "Plan Updated Successfully!");
        }else{
            return $this->error("Plan not updated!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        if($plan && $plan->delete()){
            return $this->success($plan, "Plan Deleted Successfully!");
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
            $data = $request->image->move('storage/plan', $name);
            $out = "/storage/plan/" . $name;
        };

        if(true){
            return $this->success($out, "Course Image Uploaded!");
        }else{
            return $this->error("Not Deleted!");
        }
    }

}
