<?php

namespace App\Http\Livewire\Admin;

use App\Models\Course;
use App\Models\CourseVideo;
use Livewire\Component;


class ManageCourse extends Component
{
    public $course;
    public $videos = [];

    protected $rules = [
        'course.description' => 'required|string',
    ];

    protected $listeners = ['reRender'];

    public function mount($id){
        $this->course = Course::findOrFail($id);
        $this->videos = $this->course->videos;
    }

    public function togglePublished(){
        $this->course->published = !$this->course->published;
        $this->course->save();
        $this->mount($this->course->id); 
    }

    public function addVideo(){
        $video = new CourseVideo();
        $this->course->videos()->save($video);
        // array_push($this->videos, $video);
        $this->mount($this->course->id);
    }

    public function updated(){
        $this->course->save();
    }

    public function removeVideo($id){

    }

    public function render()
    {
        return view('livewire.admin.manage-course')
        ->extends('admin.layout');
    }

    public function deleteVideo($id){
        $video = CourseVideo::find($id);
        $video->delete();
        $this->mount($this->course->id);
    }

    public function reRender(){
        $this->mount($this->course->id);
    }


}
