@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"><b>Create Page</b></div>
    <div class="card-body">

        <form action="{{ url('courses') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group"> <label>Name</label></br>
                <input type=" text" name="name" id="name" class="form-control">
            </div>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" class="form-control"></br>
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

                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

@stop