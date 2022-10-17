<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        
        $email = $request->post('email');
        $password = $request->post('password');
        $result = Admin::where(['email' => $email])->first();
        if ($result) {
            if (Hash::check($password, $result->password)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                $request->session()->put('ADMIN_EMAIL',  $email);
                return redirect('/dashboard');
            } else {
                $request->session()->flash('error', 'Please Enter Valid Password');
                $notifiction=array('message'=>'Access Denied','alert-type'=>'error');
                return back()->with($notifiction);
            }
        } else {
            $request->session()->flash('error', 'Please Enter Valid Email');
            return redirect('/admin');
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
