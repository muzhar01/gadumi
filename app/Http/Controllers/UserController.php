<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->user()){
            return $this->success($request->user(), "User data");
        } else {
            return $this->error("Not Found!");
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => ''
        ]);
        $user=$request->user();
        if($user){
            $user->name=$request->name;
            $user->email=$request->email;
            $user->address=$request->address;
            if($user->update()){
                return $this->success($request->user(), "Profile Updated Successfully!");
            }else{
                return $this->error("Failed to update profile");
            }
        }else{
            return $this->error("Not Found!");
        }
    }
}
