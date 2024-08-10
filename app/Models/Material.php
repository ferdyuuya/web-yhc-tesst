<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    
    protected $table = 'tb_material';
    
    protected $fillable = [
        'title',
        'description',
        'link',
        'courses_id',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }
}
