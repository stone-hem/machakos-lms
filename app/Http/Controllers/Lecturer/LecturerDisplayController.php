<?php

namespace App\Http\Controllers\Lecturer;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\LecturerUnit;
use Illuminate\Support\Facades\Auth;

class LecturerDisplayController extends Controller
{
    public function index(){
        $lecturer=Lecturer::where('user_id',Auth::user()->id)->first();
        $lec_unit=LecturerUnit::join('units','units.id','=','lecturer_units.unit_id')
        ->where('lecturer_id',$lecturer->id)->get();
        return view('lecturer.view.units',compact('lec_unit'));
    }
}
