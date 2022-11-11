<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'lecturer_id',
        'school_id',
        'department_id',
    ];
}
