@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"><b>Payment</b></div>
    <div class="card-body">
        <form action="{{ url('payments') }}" method="post">
            {!! csrf_field() !!}

            <label>Enrollment No</label></br>
            <select name='enrollment_id' id='enrollment_id' class="form-control">
                @foreach($enrollments as $id=> $enroll_no)
                <option value="{{$id}}">{{$enroll_no}}</option>
                @endforeach
            </select>
            <label>Paid Date</label></br>
            <input type="date" name="paid_date" id="paid_date" class="form-control"></br>
            <label>Amount</label></br>
            <input type="text" name="amount" id="amount" class="form-control"></br>
            <div class="pull-right mt-4">

                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

@stop