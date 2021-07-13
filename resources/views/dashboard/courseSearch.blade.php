@extends('dashboard.layout')

@section('content')
<main>
    <section class="hero">
        <form action="">
            <div class="container">
                <div class="row">
                    <div class="search-form">
                        <i class="fa fa-search"></i>
                        <input type="search" id="" class="search-box" placeholder="what do you want to learn">
                        <button class="button btn btn-warning search-btn px-4">search</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- <div class="borderFade-line"></div> -->
        <img src="img/slope.svg" alt="">
    </section>
    <section class="courses-section my-5">
        <div class="container">
            <div class="course">
                <div class="headings">
                    <h1>popular courses</h1>
                    <a href="#">view all</a>
                </div>
                <div class="row">
                @foreach($courses as $course)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="{{route('coursepage', ['id' => $course->id])}}">{{$course->title}}</a></h5>
                                <p class="modules-count">{{$course->videos()->count()}} modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course">
                <div class="headings">
                    <h1>Web Development courses</h1>
                    <a href="#">view all</a>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course">
                <div class="headings">
                    <h1>Artificial Intelligence courses</h1>
                    <a href="#">view all</a>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 px-2">
                        <div class="course-box">
                            <img src="img/code.jpg" alt="" class="img-fluid">
                            <div class="course-details">
                                <h5 class="course-title"><a href="#">Basics of javaScript</a></h5>
                                <p class="modules-count">8 modules</p>
                                <p class="playBack-time">Total playback time: 20:23:24 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection