@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label>Enroll No</label></br>
            <input type="text" name="enroll_no" id="enroll_no" value="{{$enrollments->enroll_no}}"
                class="form-control"></br>

            <label>Batch</label></br>
            <input type="text" name="batch_id" id="batch" value="{{$enrollments->batch_id}}" class="form-control"></br>

            <label>Student</label></br>
            <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}"
                class="form-control"></br>

            <label>Join Date</label></br>
            <input type="date" name="join_date" id="join_date" value="{{$enrollments->join_date}}"
                class="form-control"></br>

            <label>Fee</label></br>
            <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"></br>
            <div class="col-md-3">
                <div class="form-group">
                    <span for="status">Status<span style="color:red;">*</span>:</span>
                    <div>
                        <select class="form-select single-select-clear-field" name="status"
                            data-placeholder="Choose Status" required>
                            <option value=""></option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="pull-right mt-4">
                <a class="btn btn-dark" href="{{ route('enrollments.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

@stop