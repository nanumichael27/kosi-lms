@extends('dashboard.layout2')

@section('content')
<section class="dashboard-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 p-2">
                <div class="dashboard-inner-welcome info">
                    <h3>Welcome back, {{Auth::user()->name}}</h3>
                    <p>You have completed 80% of your courses this week!! Complete your pending courses to
                        improve your result.</p>
                </div>
                <div class="dashboard-inner-leaderboard info">
                    <h3>Leaderboard</h3>
                    <ul>
                        <li>
                            <div class="user-position">
                                <img src="img/c-1.png" alt="">
                                <p class="user-name">Tolani Fagbemi</p>
                            </div>
                            <img src="img/badge.svg" alt="" class="badge-img">
                        </li>
                        <li>
                            <div class="user-position">
                                <img src="img/c-1.png" alt="">
                                <p class="user-name">Tolani Fagbemi</p>
                            </div>
                            <img src="img/badge.svg" alt="" class="badge-img">
                        </li>
                        <li>
                            <div class="user-position">
                                <img src="img/c-1.png" alt="">
                                <p class="user-name">Tolani Fagbemi</p>
                            </div>
                            <img src="img/badge.svg" alt="" class="badge-img">
                        </li>
                        <li>
                            <div class="user-position">
                                <img src="img/c-1.png" alt="">
                                <p class="user-name">Tolani Fagbemi</p>
                            </div>
                        </li>
                        <li>
                            <div class="user-position">
                                <img src="img/c-1.png" alt="">
                                <p class="user-name">Tolani Fagbemi</p>
                            </div>
                        </li>
                        <li>
                            <div class="user-position">
                                <img src="img/c-1.png" alt="">
                                <p class="user-name">Tolani Fagbemi</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 p-2">
                <div class="dashboard-inner-courses info">
                    <div class="dashboard-inner-courses-heading">
                        <h3>Courses</h3>
                        <span><a href="{{route('mycourses')}}">See all</a></span>
                    </div>
                    <div class="dashboard-inner-courses-progress">
                        @foreach(Auth::user()->courseList as $courseList)
                        <div class="progress-view">
                            <p>{{$courseList->course->title}}</p>
                            <div class="progress-wrapper">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success"
                                        style="width: {{$courseList->percentage}}%;"></div>
                                </div>
                                <span>{{$courseList->percentage}}%</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="dashboard-inner-achivements info">
                    <h3>Achievments</h3>
                    <ul>
                        <li>
                            <p>Start first course.</p>
                            <i class="fa fa-check"></i>
                        </li>
                        <li>
                            <p>Watch first first course.</p>
                            <i class="fa fa-check"></i>
                        </li>
                        <li>
                            <p>Watch first first course.</p>
                            <i class="fa fa-check"></i>
                        </li>
                        <li>
                            <p>Watch first first course.</p>
                            <i class="fa fa-check"></i>
                        </li>
                        <li>
                            <p>Watch first first course.</p>
                            <i class="fa fa-check"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 p-2">
                <div class="dashboard-inner-points info">
                    <div class="points-card">
                        <h1>68</h1>
                        <span>points</span>
                    </div>
                </div>
                <div class="dashboard-inner-favourites info">
                    <div class="dashboard-inner-favourites-heading">
                        <h3>Favourites</h3>
                        <span><a href="">See all</a></span>
                    </div>
                    <div class="dashboard-favourite-single">
                        <div class="single-view-details">
                            <img src="img/codingtime.jpg" alt="">
                            <p class="pl-3">Fundamentals of JavaScript</p>
                        </div>
                        <img src="img/deletebtn.png" alt="" class="del-btn">
                    </div>
                    <div class="dashboard-favourite-single">
                        <div class="single-view-details">
                            <img src="img/dinner.jpg" alt="">
                            <p class="pl-3">Fundamentals of JavaScript</p>
                        </div>
                        <img src="img/deletebtn.png" alt="" class="del-btn">
                    </div>
                    <div class="dashboard-favourite-single">
                        <div class="single-view-details">
                            <img src="img/dinner.jpg" alt="">
                            <p class="pl-3">Fundamentals of JavaScript</p>
                        </div>
                        <img src="img/deletebtn.png" alt="" class="del-btn">
                    </div>
                    <div class="dashboard-favourite-single">
                        <div class="single-view-details">
                            <img src="img/dinner.jpg" alt="">
                            <p class="pl-3">Fundamentals of JavaScript</p>
                        </div>
                        <img src="img/deletebtn.png" alt="" class="del-btn">
                    </div>
                    <div class="dashboard-favourite-single">
                        <div class="single-view-details">
                            <img src="img/dinner.jpg" alt="">
                            <p class="pl-3">Fundamentals of JavaScript</p>
                        </div>
                        <img src="img/deletebtn.png" alt="" class="del-btn">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection