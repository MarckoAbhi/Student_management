@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ url('courses/' .$courses->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"></br>
            <label>Syllabus</label></br>
            <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control"></br>
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

            <input type="submit" value="Update" class="btn btn-primary"></br>
        </form>

    </div>
</div>

@stop