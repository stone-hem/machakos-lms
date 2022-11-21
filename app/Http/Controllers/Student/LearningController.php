<?php

namespace App\Http\Controllers\Student;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\UnitContent;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    public function units(){
        $student=Student::where('user_id',Auth::user()->id)->first();
       $unit=Unit::join('courses','courses.id','=','units.course_id')
       ->select(
        'units.id',
        'units.unit_name',
        'units.unit_code',
        'courses.course_name'
       )
       ->where('units.course_id',$student->course_id)
       ->get();

       return view('student.units.units',compact('unit'));
    }
    public function unit_display($id){
        $unit=Unit::where('id',$id)->first();
        $unit_content=UnitContent::where('unit_id',$id)->get();
        return view('student.units.unit-content',compact('unit','unit_content'));
    }
    public function unit_content($id){
        $unit_content=UnitContent::where('id',$id)->first();
        $unit=Unit::where('id',$unit_content->unit_id)->first();
        return view('student.units.unit-content-view', compact('unit_content','unit'));
    }


    public function details(){
        $student=Student::where('user_id',Auth::user()->id)->first();

        $course=Course::join('schools','schools.id','=','courses.school_id')
        ->join('departments','departments.id','=','courses.department_id')
        ->where('courses.id',$student->course_id)
        ->first();

        return view('student.view.details',compact('course'));
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
