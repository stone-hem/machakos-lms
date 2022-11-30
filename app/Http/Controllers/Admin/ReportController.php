<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function student_course(){
        $course=Course::all();
        return view('admin.student.student-course',compact('course'));
    }

    public function get_student_course($id){
        $course=Course::where('id',$id)->first();

        $student=Student::join('courses','courses.id','=','students.course_id')
        ->where('courses.id',$course->id)
        ->get();
        return view('admin.student.student-course-display',compact('course','student'));
    }
}
