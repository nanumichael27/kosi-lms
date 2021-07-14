<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseList extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id'
    ];

    protected $casts = [
        'videos' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function addWatchedVideo($id){
        $videos = $this->videos;
        if(!in_array($id, $videos)){
            array_push($videos, $id);
            $this->videos=$videos;
            $this->updatePercentage();
          $this->save();
        }
    }

    public function updatePercentage(){
        $total = count($this->course->videos);
        $watched = count($this->videos);
        $this->percentage = ($watched/ $total)*100;
    }

}
