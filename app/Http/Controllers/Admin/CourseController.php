<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\School;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $course=Course::join('departments','departments.id','=','courses.department_id')
        ->join('schools','schools.id','=','courses.school_id')
        ->get();
        return view('admin.course.index',compact('course'));
    }
    public function create(){
        $department=Department::all();
        return view('admin.course.add',compact('department'));
    }
    public function store(Request $request){
        $validated=$request->validate([
            'course_name'=>'required|string|max:40',
            'course_code'=>'required|string|max:20',
            'department_name'=>'required|exists:departments,id',
        ]);
        $department=Department::where('id',$request->department_name)->first();


        $course_name=new Course();
        $course_name->course_name=$request->input('course_name');
        $course_name->course_code=$request->input('course_code');
        $course_name->school_id=$department->school_id;
        $course_name->department_id=$department->id;
        $result=$course_name->save();

        if ($result) {
            return back()->with("message","Curriculum updated Successfully");
        }
    }
    public function edit(){
        return view('admin.course.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
