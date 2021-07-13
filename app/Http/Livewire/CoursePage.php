<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CoursePage extends Component
{
    public $course;
    public $presentVideoId;
    public $presentVideo;
    public $videos = [];


    public function mount($id){
        if($this->presentVideoId==null){
            $this->presentVideoId = 0;
        }
        $this->course = Course::findOrFail($id);
        $this->videos = $this->course->videos;
        $this->presentVideo = $this->videos[$this->presentVideoId];
    }

    public function render()
    {
        return view('livewire.course-page');
    }

    public function setPresentVideo($id){
        $this->presentVideoId = $id;
        $this->presentVideo = $this->videos[$this->presentVideoId];
        // $this->mount($this->course->id);
    }
}
