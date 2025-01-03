@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"><b>Create Page</b></div>
    <div class="card-body">

        <form action="{{ url('enrollments') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group"> <label>Enroll No</label></br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control">
            </div>
            <label>Batch ID</label></br>
            <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
            <label>Student ID</label></br>
            <input type="text" name="student_id" id="student_id" class="form-control"></br>
            <label>Join Date</label></br>
            <input type="date" name="join_date" id="join_date" class="form-control"></br>
            <label>Fee</label></br>
            <input type="text" name="fee" id="fee" class="form-control"></br>

            <div class="pull-right mt-4">

                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

@stop