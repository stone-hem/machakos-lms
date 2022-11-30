<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\School;
use App\Models\Student;
use App\Models\Unit;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function students(){
        $student=Student::all();
      
        $pdf = PDF::loadView('pdf.student', compact('student'));
        return $pdf->download('students.pdf');

    }
    public function lecturers(){
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
      
        $pdf = PDF::loadView('pdf.lecturer', compact('lecturer'));
        return $pdf->download('lecturers.pdf');

    }

    public function courses(){
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
      
        $pdf = PDF::loadView('pdf.courses', compact('course'));
        return $pdf->download('courses.pdf');

    }
    public function schools(){
        $school=School::all();
      
        $pdf = PDF::loadView('pdf.schools', compact('school'));
        return $pdf->download('schools.pdf');

    }

    public function departments(){
        $department=Department::join('schools','schools.id','departments.school_id')
        ->select(
            'schools.school_name',
            'departments.id',
            'departments.department_name',
            'departments.created_at'
        )
        ->get();
      
        $pdf = PDF::loadView('pdf.departments', compact('department'));
        return $pdf->download('departments.pdf');
    }

    public function units(){
        $unit=Unit::join('departments','departments.id','=','units.department_id')
        ->join('schools','schools.id','=','units.school_id')
        ->join('courses','courses.id','=','units.course_id')
        ->get();
      
        $pdf = PDF::loadView('pdf.units', compact('unit'));
        return $pdf->download('unit.pdf');
    }
}
