@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $batches->name }}</h5>
            <p class="card-text">Course Id : {{ $batches->course->name }}</p>
            <p class="card-text">Start Date : {{ $batches->start_date }}</p>
        </div>
        <div class="pull-right mt-4">
            <a class="btn btn-dark" href="{{ route('batches.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection