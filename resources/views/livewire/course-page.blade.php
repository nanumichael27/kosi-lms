<main class="course-page">
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="search-form">
                    <h2 class="course-heading text-light">{{$course->title}}</h2>
                </div>
            </div>
        </div>
        <img src="{{asset('img/slope.svg')}}" alt="">
    </section>
    <section class="course-page-inner">
        <button class="btn btn-info btn-sm my-2 ml-3 toggle-menu">Show modules</button>
        <div class="course-overview">
            <div class="modules">
                <div class="users-progress text-center text-light">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" style="width: {{$courseListItem->percentage}}%;"></div>
                    </div>
                    <p>{{$courseListItem->percentage}}% complete</p>
                </div>
                <ul class="module-list">
                    <h5 class="text-light ml-4 py-3">Course Module</h5>
                   
                    @foreach($videos as $index => $video)
                    <li class="text-capitalize" wire:key="{{$index}}" wire:click="setPresentVideo('{{$index}}')"><a style="cursor: pointer;" >{{$index+1}}. {{$video->title}}</a></li>
                    @endforeach
                  
                    </ul>
            </div>
            <div class="course-proper">
                <!-- <video src="{{asset('img/1. What Are Patterns.mp4')}}" controls></video> -->
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$presentVideo->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="course-proper-header">
                    <h3 class="course-proper-title">{{$presentVideo->title}}</h3>
                    <span class="play-time">Total playback time: 20:23:44</span>
                </div>
                <div class="course-proper-text">
                    <p>{{$presentVideo->description}}</p>
                </div>
                <!-- <div class="comments">
                    <h3>Comments</h3>
                </div> -->
            </div>
        </div>
    </section>
</main>