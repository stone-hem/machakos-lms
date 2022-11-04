<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        return view('admin.school.index');
    }
    public function create(){
        return view('admin.school.add');
    }
    public function store(){
        
    }
    public function edit(){
        return view('admin.school.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
