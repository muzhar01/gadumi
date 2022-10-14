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
            'title'=>'required',
            'price'=>'',
            'currency_iso'=>'',
            'currency_symbol'=>'',
            'currency_left'=>'',
            'status'=>''
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

}
