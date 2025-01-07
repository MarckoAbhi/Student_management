@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Batch</div>
    <div class="card-body">

        <form action="{{ url('batches/' .$batches->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
            <label>Course Id</label></br>
            <input type="text" name="course_id" id="course_id" value="{{$batches->course_id}}"
                class="form-control"></br>
            <label>Start Date</label></br>
            <input type="date" name="start_date" id="start_date" value="{{$batches->start_date}}"
                class="form-control"></br>
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
            </div><br>
            <a class="btn btn-dark" href="{{ route('batches.index') }}"> Back</a>
            <input type="submit" value="Update" class="btn btn-primary"></br>
        </form>

    </div>
</div>

@stop