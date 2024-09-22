<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolls extends Model
{
    use HasFactory;
    protected $table ='enrolls';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'course',
        'message',
        'student_age',
        'student_gender',
        'teacher_gender',
        'package',
        'days',
    ];
}
