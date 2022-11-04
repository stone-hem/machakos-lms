<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('admin.department.index');
    }
    public function create(){
        return view('admin.department.add');
    }
    public function store(){
        
    }
    public function edit(){
        return view('admin.department.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
