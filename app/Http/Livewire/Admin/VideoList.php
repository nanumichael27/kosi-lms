<?php

namespace App\Http\Livewire\Admin;

use App\Models\CourseVideo;
use Livewire\Component;

class VideoList extends Component
{
    public $video;

    protected $rules = [
        'video.title' => 'required|string',
        'video.description' => 'required|string|max:500',
        'video.link' => 'required|string|max:500',
    ];

    public function mount($id)
    {
        $this->video = CourseVideo::find($id);
    }

    public function render()
    {
        return view('livewire.admin.video-list');
    }

    public function deleteVideo()
    {
        $this->video->delete();
        $this->emitUp('reRender');
    }

    public function updated(){
        // $this->validate();
        $this->video->save();
    }
}
