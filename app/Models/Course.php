<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [

        'title',
        'teacher_name',
        'teacher_lastname',
        'created_at',
        'updated_at',
        'image'

    ];

}
