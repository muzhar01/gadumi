<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Exercise;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }
    public function index()
    {
        if(Auth::guard('admin')->check()){
            return view('admin.dashboard');
        }
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $remember = $request->has('remember_me');
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->intended('/admin/dashboard');
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withErrors(['invalid' => 'Invalid Credentials!'])->withInput($request->only('email', 'remember'));
    }
    public function dashboard()
    {
        $course=Course::count();
        $lesson=Lesson::count();
        $exercise=Exercise::count();
        return view('admin.dashboard',compact('course','lesson','exercise'));
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
    public function profile()
    {
        $admin= Auth::guard('admin')->user();
        return view('admin.profile',compact('admin'));
    }
    public function profileDetails(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        $id= Auth::guard('admin')->id();
        $admin=Admin::find($id);
        if($request->hasFile('image')){
            $image_path = public_path($admin->image); 
            if (isset($admin->image) && file_exists($image_path)) {
                unlink($image_path);
            }
            $name = time() . '.' . $request->image->getClientOriginalExtension();
            $data = $request->image->move('storage/admin', $name);
            $out = "/storage/admin/" . $name;
            $admin->image=$out;
        };
        $admin->name=$request->name;
        $admin->email=$request->email;
        if($admin->save()){
            return redirect()->back()->with('success','Profile details change successfully');
        }else{
            return redirect()->back()->with('error','Failed to chnage Profile details');
        }
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:4',
            'password' => 'required|confirmed|min:4|max:12',
        ]);
        $id= Auth::guard('admin')->id();
        $admin=Admin::find($id);
        $password=$admin->password;
        $current_password=$request->current_password;
        if(Hash::check($current_password,$password)){
            $admin->password=bcrypt($request->password);
            if($admin->save()){
                return redirect()->back()->with('success','Password changed successfully!');
            }else{
                return redirect()->back()->with('error','Failed to changed password!');
            }
        }else{
            return redirect()->back()->with('error','Current password not matched!');
        }
    }

}
