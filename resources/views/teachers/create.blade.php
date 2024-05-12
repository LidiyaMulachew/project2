@extends('teachers.layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher_page</div>
    <div class="card-body">
        <form action="{{ route('teachers.store') }}" method="post">
            @csrf
            <label>First Name</label>
            <input type="text" name="First_name" id="First_name" value="{{ isset($teachers) ? $teachers->First_name : '' }}" class="form-control"/><br/>
            <label>Middle Name</label>
            <input type="text" name="Middle_name" id="Middle_name" value="{{ isset($teachers) ? $teachers->Middle_name : '' }}" class="form-control"/><br/>
            <label>Last Name</label>
            <input type="text" name="Last_name" id="Last_name" value="{{ isset($teachers) ? $teachers->Last_name : '' }}" class="form-control"/><br/>
            <label>Age</label>
            <input type="text" name="Age" id="Age" value="{{ isset($teachers) ? $teachers->Age : '' }}" class="form-control"/><br/>
            <label>Education Level</label>
            <input type="text" name="Education_level" id="Education_level" value="{{ isset($teachers) ? $teachers->Education_level : '' }}" class="form-control"/><br/>
            <label>Teaching</label>
            <input type="text" name="Teaching" id="Teaching" value="{{ isset($teachers) ? $teachers->Teaching : '' }}" class="form-control"/><br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop