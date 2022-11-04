<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->role==0){
            return view('admin.dashboard');
        }
        elseif(Auth::user()->role==1){
            return view('lecturer.dashboard');
        }
        elseif(Auth::user()->role==2){
            return view('student.dashboard');
        }
    }
}
