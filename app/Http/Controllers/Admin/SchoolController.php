<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        $school=School::all();
        return view('admin.school.index',compact('school'));
    }
    public function create(){
        return view('admin.school.add');
    }
    public function store(Request $request){
        $validated=$request->validate([
            'school_name'=>'required|string|max:40|unique:schools,school_name',
            'school_letter'=>'required|alpha|max:1'
        ]);

        $school=new School();
        $school->school_name=$request->input('school_name');
        $school->school_string=$request->input('school_letter');
        $result=$school->save();

        if ($result) {
            return back()->with("message","School has been created successfully");
        }

    }
    public function edit($id){
       $school=School::find($id);
        return view('admin.school.edit',compact('school'));
    }
    public function update(Request $request,$id){
        $validated=$request->validate([
            'school_name'=>'required|string|max:40',
            'school_letter'=>'required|alpha|max:1'
        ]);
        $school=School::find($id);
        $school->school_name=$request->input('school_name');
        $school->school_string=$request->input('school_letter');
        $result=$school->update();

        if ($result) {
            return back()->with("message","updated..");
        } 
    }
    public function destroy(){
        
    }
}
