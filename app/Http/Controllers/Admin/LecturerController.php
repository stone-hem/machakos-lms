<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\User;
use App\Models\Lecturer;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\LecturerUnit;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturer = Lecturer::join('schools', 'schools.id', '=', 'lecturers.school_id')
            ->join('departments', 'departments.id', '=', 'lecturers.department_id')
            ->select(
                'schools.school_name',
                'departments.department_name',
                'lecturers.id',
                'lecturers.lecturer_name',
                'lecturers.lecturer_email',
                'lecturers.lecturer_location',
                'lecturers.lecturer_contact'
            )
            ->get();
        return view('admin.lecturer.index', compact('lecturer'));
    }
    public function create($id)
    {
        $department = Department::where('id', $id)->first();
        return view('admin.lecturer.add', compact('department'));
    }
    public function store(Request $request, $id)
    {
        DB::beginTransaction();
        $validated = $request->validate([
            'lecturer_name' => 'required|string',
            'address' => 'required',
            'email' => 'required|email|unique:lecturers,lecturer_email',
            'phone_number' => 'required|string|max:14',
        ]);
        $department = Department::where('id', $id)->first();

        $user = new User();
        $lecturer = new Lecturer();


        try {
            $user->name = $request->input('lecturer_name');
            $user->email = $request->input('email');
            $user->role = 1;
            $user->password = Hash::make($request->phone_number);
            $user->save();
        } catch (\Throwable $th) {
            return response()->json(['error' => $th]);
            DB::rollBack();
        }

        try {
            $lecturer->lecturer_name = $request->input('lecturer_name');
            $lecturer->lecturer_location = $request->input('address');
            $lecturer->lecturer_email = $request->input('email');
            $lecturer->lecturer_contact = $request->input('phone_number');
            $lecturer->user_id=$user->id;
            $lecturer->lecturer_reg = $department->school_id;
            $lecturer->school_id = $department->school_id;
            $lecturer->department_id = $department->id;
            $lecturer->save();
        } catch (\Throwable $th) {
            return response()->json(['error' => $th]);
            DB::rollBack();
        }


        DB::commit();
        return back()->with("message", "lecturer enrolled successfully");
    }
    public function edit()
    {
        return view('admin.lecturer.edit');
    }
    public function update()
    {
    }
    public function destroy()
    {
    }


    public function unit($id)
    {
        $lecturer = Lecturer::where('id', $id)->first();
        $unit = Unit::all();
        return view('admin.lecturer.unit', compact('lecturer', 'unit'));
    }

    public function allocate(Request $request, $id)
    {
        $lecturer = Lecturer::where('id', $id)->first();
        try {
            $lec_unit = $request->input('units');
            if($lec_unit==null){
                return back()->with("message","No unit selected");
            }
            foreach ($lec_unit as $item) {
                $duplicate=LecturerUnit::where('unit_id',$item)->first();
            }

            if ($duplicate) {
                $duplicate_unit=Unit::where('id',$duplicate->unit_id)->first();
                return back()->with("message","$duplicate_unit->unit_name has already been allocated");
            }
    
            foreach ($lec_unit as $item) {
                LecturerUnit::create([
                    'unit_id'=>$item,
                    'lecturer_id'=>$lecturer->id,
                    'school_id'=>$lecturer->school_id,
                    'department_id'=>$lecturer->department_id,
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json(['error in processing'=>$th]);
        }

        return back()->with("success","allocated successfully");
        
    }
}
