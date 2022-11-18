<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Lecturer\LecturerDashBoardController;
use App\Http\Controllers\Lecturer\LecturerUnitController;
use App\Http\Controllers\Student\LearningController;
use App\Http\Controllers\Student\StudentDashBoardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('homepage',[HomeController::class,'index']);


Route::get('admin/dashboard',[DashBoardController::class,'index']);

Route::controller(SchoolController::class)->group(function(){
    Route::get('admin/school','index');
    Route::get('admin/school/create','create');
    Route::post('admin/school/store','store');
    Route::get('admin/school/edit/{id}','edit');
    Route::put('admin/school/update/{id}','update');
    Route::delete('admin/school/destroy','destroy');
});

Route::controller(DepartmentController::class)->group(function(){
    Route::get('admin/department','index');
    Route::get('admin/department/create','create');
    Route::post('admin/department/store','store');
    Route::get('admin/department/edit','edit');
    Route::put('admin/department/update','update');
    Route::delete('admin/department/destroy','destroy');
});

Route::controller(CourseController::class)->group(function(){
    Route::get('admin/course','index');
    Route::get('admin/course/create/{id}','create');
    Route::post('admin/course/store/{id}','store');
    Route::get('admin/course/edit','edit');
    Route::put('admin/course/update','update');
    Route::delete('admin/course/destroy','destroy');
});

Route::controller(UnitController::class)->group(function(){
    Route::get('admin/unit','index');
    Route::get('admin/unit/create/{id}','create');
    Route::post('admin/unit/store/{id}','store');
    Route::get('admin/unit/edit','edit');
    Route::put('admin/unit/update','update');
    Route::delete('admin/unit/destroy','destroy');
});

Route::controller(LecturerController::class)->group(function(){
    Route::get('admin/lecturer','index');
    Route::get('admin/lecturer/create/{id}','create');
    Route::post('admin/lecturer/store/{id}','store');
    Route::get('admin/lecturer/edit','edit');
    Route::put('admin/lecturer/update','update');
    Route::delete('admin/lecturer/destroy','destroy');

    Route::get('admin/lecturer/unit/{id}','unit');
    Route::post('admin/lecturer/unit/allocate/{id}','allocate');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('admin/student','index');
    Route::get('admin/student/create/{id}','create');
    Route::post('admin/student/store/{id}','store');
    Route::get('admin/student/edit','edit');
    Route::put('admin/student/update','update');
    Route::delete('admin/student/destroy','destroy');
});




//student
Route::controller(LearningController::class)->group(function(){
    Route::get('student/my-units','units');
    Route::get('student/course/details','details');
    Route::get('student/examinations','exams');
    Route::get('student/assignments','assignments');
    Route::get('student/classes','classes');
});


Route::controller(StudentDashBoardController::class)->group(function(){
    Route::get('student/dashboard','index');
});


//lecturer

Route::controller(LecturerDashBoardController::class)->group(function(){
    Route::get('lecturer/dashboard','index');
});

Route::controller(LecturerUnitController::class)->group(function(){
    Route::get('lecturer/my-units','index');
    Route::get('lecturer/my-units/create/{id}','create');
    Route::post('lecturer/my-units/store/{id}','store');
    Route::get('lecturer/my-units/{id}','get');
    Route::get('lecturer/my-units/pdf/{id}','view_pdf');
});
