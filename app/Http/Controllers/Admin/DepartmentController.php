<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\School;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $department=Department::join('schools','schools.id','departments.school_id')
        ->select(
            'schools.school_name',
            'departments.id',
            'departments.department_name',
            'departments.created_at'
        )
        ->get();
        return view('admin.department.index',compact('department'));
    }
    public function create(){
        $school=School::all();
        return view('admin.department.add',compact('school'));
    }
    public function store(Request $request){
        $validated=$request->validate([
            'department_name'=>'required|string|max:40',
            'school_name'=>'required|exists:schools,id'
        ]);

        $department_name=new Department();
        $department_name->department_name=$request->input('department_name');
        $department_name->school_id=$request->input('school_name');
        $result=$department_name->save();

        if ($result) {
            return back()->with("message","Department has been created successfully");
        }
    }
    public function edit(){
        return view('admin.department.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
