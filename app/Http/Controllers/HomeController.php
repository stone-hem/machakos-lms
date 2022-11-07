<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Course;
use App\Models\School;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->role==0){
            $schools=School::count();
            $departments=Department::count();
            $courses=Course::count();
            $units=Unit::count();
            return view('admin.dashboard',compact(
                'schools',
                'departments',
                'courses',
                'units'
            ));
        }
        elseif(Auth::user()->role==1){
            return view('lecturer.dashboard');
        }
        elseif(Auth::user()->role==2){
            return view('student.dashboard');
        }
    }
}
