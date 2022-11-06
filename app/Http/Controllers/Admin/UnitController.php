<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $unit=Unit::join('departments','departments.id','=','units.department_id')
        ->join('schools','schools.id','=','units.school_id')
        ->join('courses','courses.id','=','units.course_id')
        ->get();

        return view('admin.unit.index',compact('unit'));
    }
    public function create($id){
        $course=Course::where('id',$id)->first();
        return view('admin.unit.add',compact('course'));
    }
    public function store(Request $request,$id){
        $validated=$request->validate([
            'unit_name'=>'required|string|max:40',
            'unit_code'=>'required|string|max:20',
        ]);
        $course=Course::where('id',$id)->first();


        $unit=new Unit();
        $unit->unit_name=$request->input('unit_name');
        $unit->unit_code=$request->input('unit_code');
        $unit->school_id=$course->school_id;
        $unit->department_id=$course->department_id;
        $unit->course_id=$course->id;
        $result=$unit->save();

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
