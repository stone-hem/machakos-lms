<?php

namespace App\Http\Controllers\Lecturer;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LecturerDisplayController extends Controller
{
    public function index(){
        $unit=Unit::all();
        return view('lecturer.view.units',compact('unit'));
    }
}
