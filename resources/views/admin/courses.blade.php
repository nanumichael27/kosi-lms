@extends('admin.layout')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Courses</h2>
                <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#largeModal">
                    <i class="zmdi zmdi-plus"></i>Add Course</button>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        @foreach($courses as $course)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{$course->title}}</h4>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p> -->
                <a href="{{route('admin.managecourse', ['id' => $course->id])}}" class="btn btn-success btn-sm">
                        <i class="fa fa-magic"></i>&nbsp; Manage course</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
            </div>
        </div>
    </div>

</div>
@endsection

@section('modals')
<!-- modal large -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.createcourse')}}" method="post" class="">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="title" name="title" required placeholder="Course Title" class="form-control">
                        </div>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div> -->
        </div>
    </div>
</div>
<!-- end modal large -->
@endsection