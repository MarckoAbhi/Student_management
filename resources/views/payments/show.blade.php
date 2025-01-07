@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Payment Details</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enrollment No : {{ $item->enrollment->enroll_no }}</h5>
            <p class="card-text">Paid Date : {{ $item->paid_date }}</p>
            <p class="card-text">Amount : {{ $item->amount }}</p>
        </div>
        <div class="pull-right mt-4">
            <a class="btn btn-dark" href="{{ route('payments.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection