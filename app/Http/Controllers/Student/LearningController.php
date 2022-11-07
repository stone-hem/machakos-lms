<?php

namespace App\Http\Controllers\Student;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    public function units(){
        $student=Student::where('user_id',Auth::user()->id)->first();
       $unit=Unit::join('courses','courses.id','=','units.course_id')
       ->where('units.course_id',$student->course_id)
       ->get();

       return view('student.view.units');
    }
}
