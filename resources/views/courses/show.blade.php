@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Course data</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $courses->name }}</h5>
            <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
            <p class="card-text">Duration : {{ $courses->duration() }}</p>
        </div>
        <button>
            <a class="btn btn-dark" href="{{ route('courses.index') }}"> Back</a>
        </button>
    </div>
</div>
@endsection