@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Payment</div>
    <div class="card-body">

        <form action="{{ url('payments/' .$payments->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")

            <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />

            <label>Enrollment No</label></br>
            <select name='enrollment_id' id='enrollment_id' class="form-control">
                @foreach($enrollments as $id=> $enroll_no)
                <option value="{{$id}}">{{$enroll_no}}</option>
                @endforeach
            </select>

            <label>Paid Date</label></br>
            <input type="date" name="paid_date" id="paid_date" value="{{$payments->paid_date}}"
                class="form-control"></br>

            <label>Amount</label></br>
            <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>

            <div class="pull-right mt-4">
                <a class="btn btn-dark" href="{{ route('payments.index') }}"> Back</a>
                <button style="float:right" type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
</div>

@stop