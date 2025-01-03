@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher data</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $teachers->name }}</h5>
            <p class="card-text">Address : {{ $teachers->address }}</p>
            <p class="card-text">Mobile : {{ $teachers->phone }}</p>
            <p class="card-text">Mobile : {{ $teachers->email }}</p>
            <p class="card-text">Mobile : {{ $teachers->dob }}</p>
        </div>
        <button>
    </div>
</div>
@endsection