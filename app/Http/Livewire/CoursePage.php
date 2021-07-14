<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CoursePage extends Component
{
    public $course;
    public $presentVideoId;
    public $presentVideo;
    public $videos = [];
    public $courseListItem;


    public function mount($id){

        $this->course = Course::findOrFail($id);
        $this->videos = $this->course->videos;
        

        // dd(Auth::user()->courseList);
        $isInList = false;
        foreach (Auth::user()->courseList as $course) {
            if($course->course->id == $id) $isInList = true;
        }
        
        if(!$isInList){
            Auth::user()->addCourseToList($id);
        }
        foreach (Auth::user()->fresh()->courseList as $courseListItem) {
            if($courseListItem->course_id == $id) $this->courseListItem = $courseListItem;
        }

        if($this->presentVideoId==null){
            $this->presentVideoId = 0;
            $this->courseListItem->addWatchedVideo(0);
        }

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
        $this->courseListItem->addWatchedVideo($id);
    }


}
