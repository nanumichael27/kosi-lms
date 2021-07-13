<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function courses(){
        $courses = Course::where('published', '1')->get();
        return view('dashboard.courseSearch', ['courses' => $courses]);
    }

    public function course($id){
        // $course = Course::findOrFail($id);
        return view('dashboard.coursepage', ['id' => $id]);
    }
}
