<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        return view('admin.unit.index');
    }
    public function create(){
        return view('admin.unit.add');
    }
    public function store(){
        
    }
    public function edit(){
        return view('admin.unit.edit');
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
