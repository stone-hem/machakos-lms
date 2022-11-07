<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        $student=Student::join('schools','schools.id','=','students.school_id')
        ->join('departments','departments.id','=','students.department_id')
        ->join('courses','courses.id','=','students.course_id')
        ->get();
        return view('admin.student.index',compact('student'));
    }
    public function create($id){
    $course=Course::where('id',$id)->first();
        return view('admin.student.add',compact('course'));
    }
    public function store(Request $request,$id){
        DB::beginTransaction();
        $validated=$request->validate([
            'student_name'=>'required|string',
            'address'=>'required',
            'email'=>'required|email|unique:students,student_email',
            'phone'=>'required|string|max:14',
            'id_number'=>'required|numeric|digits_between:6,8',
            'student_photo'=>'required|mimes:png,jpg,jpeg'
        ]);
        $course=Course::where('id',$id)->first();


        $student=new Student();
        $user=new User();

        try {
        $path=$request->file('student_photo')->store('student','public');
        $student->student_name=$request->input('student_name');
        $student->student_location=$request->input('address');
        $student->student_email=$request->input('email');
        $student->student_contact=$request->input('phone');
        $student->student_id=$request->input('id_number');
        $student->student_image=$path;
        $student->student_reg=$course->course_code;
        $student->school_id=$course->school_id;
        $student->department_id=$course->department_id;
        $student->course_id=$course->id;

        $student->save();
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th]);
            DB::rollBack();
        }

        try {
            $user->name=$request->input('student_name');
            $user->email=$request->input('email');
            $user->role=2;
            $user->password=Hash::make($request->student_id);
            $user->save();
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th]);
            DB::rollBack();
        }


        DB::commit();
        return back()->with("message","student enrolled successfully");
       

        
    }
    public function edit(){
        return view('admin.student.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
