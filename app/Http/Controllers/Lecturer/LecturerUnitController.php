<?php

namespace App\Http\Controllers\Lecturer;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\LecturerUnit;
use App\Models\UnitContent;
use Illuminate\Support\Facades\Auth;

class LecturerUnitController extends Controller
{
    public function index(){
        $lecturer=Lecturer::where('user_id',Auth::user()->id)->first();
        $lec_unit=LecturerUnit::join('units','units.id','=','lecturer_units.unit_id')
        ->select(
            'units.id',
            'units.unit_name',
            'units.unit_code',
            'units.course_id',
            'lecturer_units.lecturer_id',
            'lecturer_units.school_id',
            'lecturer_units.department_id'
            )
        ->where('lecturer_id',$lecturer->id)->get();
        return view('lecturer.units.units',compact('lec_unit'));
    }
    public function create($id){
        $unit=Unit::where('id',$id)->first();
        return view('lecturer.units.units-add',compact('unit'));
    }
    public function store(Request $request,$id){
        $validated=$request->validate([
            'content_name'=>'required',
            'description'=>'required|string|max:200',
            'filename'=>'mimes:pdf,docx,doc,mp4|required',
        ]);
        $unit=Unit::where('id',$id)->first();
        $unit_content=new UnitContent();

        if($request->filename!=null){
            $path=$request->file('filename')->store('unit-content','public');
            $unit_content->filepath=$path;
        }
        $unit_content->name=$request->input('content_name');
        $unit_content->description=$request->input('description');
        $unit_content->unit_id=$unit->id;
        $unit_content->lecturer_id=Auth::user()->id;
        $unit_content->school_id=$unit->school_id;
        $unit_content->department_id=$unit->department_id;
        $res=$unit_content->save();
        if($res){
            return back()->with("message","Content Updated Successfully");
        }
    }
    public function get($id){
        $unit=Unit::where('id',$id)->first();
        $unit_content=UnitContent::where('unit_id',$unit->id)->get();

       

        return view('lecturer.units.unit-content',compact('unit_content','unit'));
    }

    public function view_pdf($id){
        $unit_content=UnitContent::where('id',$id)->first();
        $unit=Unit::where('id',$unit_content->unit_id)->first();
        return view('lecturer.units.unit-content-view', compact('unit_content','unit'));
    }
}
