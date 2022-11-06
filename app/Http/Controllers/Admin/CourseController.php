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
        ->select(
            'schools.school_name',
            'departments.department_name',
            'courses.id',
            'courses.course_name',
            'courses.course_code',
            'courses.created_at'
        )
        ->get();
        return view('admin.course.index',compact('course'));
    }
    public function create($id){
        
        $department=Department::where('id',$id)->first();
        return view('admin.course.add',compact('department'));
    }
    public function store(Request $request,$id){
        $validated=$request->validate([
            'course_name'=>'required|string|max:40',
            'course_code'=>'required|string|max:20',
        ]);
        $department=Department::where('id',$id)->first();


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
