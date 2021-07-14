<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $casts = [
        'published' => 'boolean',
    ];

    public function videos(){
        return $this->hasMany(CourseVideo::class);
    }

    public function orders(){
        return $this->hasMany(CourseList::class);
    }
}
