@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Enrollment data</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enroll No : {{ $courses->enroll_no }}</h5>
            <p class="card-text">Batch Id : {{ $courses->batch->name }}</p>
            <p class="card-text">Student Id : {{ $courses->student->name }}</p>
            <p class="card-text">Join Date : {{ $courses->join_date }}</p>
            <p class="card-text">Fee : {{ $courses->fee }}</p>
        </div>
        <button>
    </div>
</div>
@endsection