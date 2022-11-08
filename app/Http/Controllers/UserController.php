<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required_with:password|same:new_password'
        ]);
        $user=$request->user();
        if($user){
            if(Hash::check($request->current_password,$user->password)){
                $user->password=bcrypt($request->new_password);
                if($user->update()){
                    return $this->success($request->user(), "Password changed Successfully!");
                }else{
                    return $this->error("Failed to change password!");
                }
            }else{
                return $this->error("Current password not matched!");
            }
        }else{
            return $this->error("Not Found!");
        }
    }
    public function deleteAccount(Request $request)
    {
        $request->validate([
            'delete_password' => 'required'
        ]);
        $user=$request->user();
        if($user){
            if(Hash::check($request->delete_password,$user->password)){
                $user->password=bcrypt($request->new_password);
                if($user->update()){
                    return $this->success($request->user(), "Password changed Successfully!");
                }else{
                    return $this->error("Failed to change password!");
                }
            }else{
                return $this->error("Password not matched!");
            }
        }else{
            return $this->error("Not Found!");
        }
    }
}
