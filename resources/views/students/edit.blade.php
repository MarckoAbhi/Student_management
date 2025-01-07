@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ url('students/' .$students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="email" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
            <label>DOB</label></br>
            <input type="date" name="dob" id="dob" value="{{$students->dob}}" class="form-control"></br>
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
                <a class="btn btn-dark" href="{{ route('students.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
</div>

@stop