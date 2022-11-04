<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        return view('admin.unit.index');
    }
    public function create(){
        $course=Course::all();
        return view('admin.unit.add',compact('course'));
    }
    public function store(Request $request){
        $validated=$request->validate([
            'unit_name'=>'required|string|max:40',
            'unit_code'=>'required|string|max:20',
            'course_name'=>'required|exists:courses,id',
        ]);
        $course=Course::where('id',$request->department_name)->first();

        return $course;


        $course_name=new Unit();
        $course_name->course_name=$request->input('course_name');
        $course_name->course_code=$request->input('course_code');
        $course_name->school_id=$course->school_id;
        $course_name->department_id=$course->department_id;
        $course_name->course_id=$course->id;
        $result=$course_name->save();

        if ($result) {
            return back()->with("message","Curriculum updated Successfully");
        }
    }
    public function edit(){
        return view('admin.unit.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
