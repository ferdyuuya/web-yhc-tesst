<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    
    protected $table = 'tb_courses';
    
    protected $fillable = [
        'title',
        'description',
        'duration',
    ];
}
