<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(){
        return view('admin.lecturer.index');
    }
    public function create(){
        return view('admin.lecturer.add');
    }
    public function store(){
        
    }
    public function edit(){
        return view('admin.lecturer.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
