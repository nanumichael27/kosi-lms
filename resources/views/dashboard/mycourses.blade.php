@extends('dashboard.layout2')

@section('content')
<section class="my-courses content-wrapper">
    <div class="back-btn">
        <a href="dashboard.html"><img src="img/Arrow 1.svg" alt="" class="mr-3">Back to Dashboard</a>
    </div>
    <div class="content-wrapper-main">
        <h4>My Courses</h4>
        <div class="content-boxes">
            <div class="container-fluid p-0">
                <div class="row">
                @foreach(Auth::user()->courseList as $courseList)
                        <div class="col-12 col-md-6 col-lg-4">
                        <div class="content-box">
                            <div class="content-box-img">
                                <img src="img/code.jpg" alt="" class="img-fluid box-img" >
                            </div>
                            <div class="content-details">
                                <h5 class="content-title"><a href="{{route('coursepage', ['id' => $courseList->course->id])}}">{{$courseList->course->title}}</a></h5>
                                <p class="content-instructor">Instructor:<span class="pl-2">Admin</span></p>
                                <p class="content-date-enrolled">Enrolled:<span class="pl-2">{{$courseList->created_at}}</span></p>
                                <div class="content-progress">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success"
                                            style="width: {{$courseList->percentage}}%;"></div>
                                    </div>
                                    <span>{{$courseList->percentage}}%</span>
                                </div>
                                <div class="range mt-3">completed</div>
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection