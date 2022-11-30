<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\School;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index(){
        $schools=School::count();
        $departments=Department::count();
        $courses=Course::count();
        $units=Unit::count();
      
        $total_lecturer = Lecturer::select('department_id')
        ->selectRaw('count(department_id) as name')
        ->groupBy('department_id')
        ->orderBy('name', 'DESC')
        ->get();
    //    return $ordered;
        foreach ($total_lecturer as $item) {
            $department_name=Department::where('id',$item->department_id)->pluck('department_name');
        }
        // dd($department_name);

      
        return view('admin.dashboard',compact(
            'schools',
            'departments',
            'courses',
            'units',
            'total_lecturer',
            'department_name'
        ));
      
      
    }
   
}
