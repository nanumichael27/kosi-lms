@extends('dashboard.layout')

@section('content')
@livewire('course-page', ['id' => $id])
@endsection

@section('scripts')
<script src="{{asset('js/toggleCourseModules.js')}}"></script>
@endsection