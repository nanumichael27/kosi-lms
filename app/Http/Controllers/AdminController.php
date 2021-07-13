<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }

    public function courses(){
        $courses = Course::all();
        return view('admin.courses', ['courses' => $courses]);
    }

    public function createCourse(Request $request){
        $title = $request->title;
        $course = new Course;
        $course->title = $title;
        $course->save();
        return redirect()->route('admin.courses');
    }

    public function manageCourse($id){
        $course = Course::findOrFail($id);
        return view('admin.managecourse', ['course' => $course]);
    }
}
