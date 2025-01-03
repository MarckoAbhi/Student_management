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
            <!-- <input type="text" name="course_id" id="course_id" class="form-control"></br> -->
            <select name='course_id' id='course_id' class="form-control">
                @foreach($courses as $id=> $name)
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>

            <label>Start Date</label></br>
            <input type=" date" name="start_date" id="start_date" class="form-control"></br>


            <div class="pull-right mt-4">

                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>

@stop