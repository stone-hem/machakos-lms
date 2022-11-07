<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\School;
use App\Models\Unit;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
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
   
}
