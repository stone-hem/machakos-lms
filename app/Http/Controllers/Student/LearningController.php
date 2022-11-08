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

       return view('student.view.units',compact('unit'));
    }

    public function details(){
        $student=Student::where('user_id',Auth::user()->id)->first();

        $course=Course::join('schools','schools.id','=','courses.school_id')
        ->join('departments','departments.id','=','courses.department_id')
        ->where('courses.id',$student->course_id)
        ->first();

        return view('student.view.details');
    }

    public function exams(){
        return view('student.view.exams');
    }

    public function assignments(){
        return view('student.view.assignments');
    }

    public function classes(){
        return view('student.view.classes');
    }
}
