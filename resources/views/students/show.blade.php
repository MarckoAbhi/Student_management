@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Student data</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Mobile : {{ $students->phone }}</p>
            <p class="card-text">Mobile : {{ $students->email }}</p>
            <p class="card-text">Mobile : {{ $students->dob }}</p>
        </div>
        <button>
    </div>
</div>
@endsection