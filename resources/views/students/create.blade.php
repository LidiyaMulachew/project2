@extends('students.layout')
@section('content')
<div class="card">
    <div class="card-header">Student_page</div>
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="post">
             {!! csrf_field() !!}
            <label>First_name</label>
            <input type="text" name="First_name" id="First_name" value="{{$students->First_name}}" class="form-control"/></br>
            <label>Middle_name</label>
            <input type="text" name="Middle_name" id="Middle_name" value="{{$students->Middle_name}}" class="form-control"/></br>
            <label>Last_name</label>
            <input type="text" name="Last_name" id="Last_name" value="{{$students->Last_name}}" class="form-control"/></br>
            <label>Age</label>
            <input type="text" name="Age" id="Age" value="{{$students->Age}}" class="form-control"/></br>
            <label>Grade</label>
            <input type="text" name="Grade" id="Grade" value="{{$students->Grade}}" class="form-control"/></br>
            <label>Major</label>
            <input type="text" name="Major" id="Major" value="{{$students->Major}}" class="form-control"/></br>
            <label>Teacher_name</label>
            <input type="text" name="Teacher_name" id="Teacher_name" value="{{$students->Teacher_name}}" class="form-control"/></br>
            
        </form>
    </div>
</div>
@stop