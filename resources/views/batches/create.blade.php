@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"><b>Create Batch</b></div>
    <div class="card-body">
        <form action="{{ url('batches') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group"> <label>Batch Name</label></br>
                <input type=" text" name="name" id="name" class="form-control">
            </div>
            <label>Course</label></br>
            <select name='course_id' id='course_id' class="form-control">
                @foreach($courses as $id=> $name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
            <label>Start Date</label></br>
            <input type="date" name="start_date" id="start_date" class="form-control"></br>
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
                <a class="btn btn-dark" href="{{ route('batches.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@stop