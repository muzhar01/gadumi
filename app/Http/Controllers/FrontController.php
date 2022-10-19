<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display Home page.
     */
    public function index(){
        return view('home');
    }
    public function listing(){
        return view('listing');
    }

    /**
     * Display Home page.
     */
    public function cmd($cmd){
        Artisan::call("$cmd");
        echo "<pre>";
        return Artisan::output();

    }
}
