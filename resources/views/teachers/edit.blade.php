@extends('teachers.layout')
@section('content')
<div class="card">
    <div class="card-header">Edit</div>
    <div class="card-body">
        <form action="{{ url('teacher/' .$teachers->id)}}" method="post">
        {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$teachers->id}}"/>
                                <label>First_name</label>
            <input type="text" name="First_name" id="First_name" value="{{$teachers->First_name}}" class="form-control"/></br>
            <label>Middle_name</label>
            <input type="text" name="Middle_name" id="Middle_name" value="{{$teachers->Middle_name}}" class="form-control"/></br>
            <label>Last_name</label>
            <input type="text" name="Last_name" id="Last_name" value="{{$teachers->Last_name}}" class="form-control"/></br>
            <label>Age</label>
            <input type="text" name="Age" id="Age" value="{{$teachers->Age}}" class="form-control"/></br>
            <label>Education_level</label>
            <input type="text" name="Education_level" id="Education_level" value="{{$teachers->Education_level}}" class="form-control"/></br>
            <label>Teaching</label>
            <input type="text" name="Teaching" id="Teaching" value="{{$teachers->Teaching}}" class="form-control"/></br>
            
            
        </form>
    </div>
</div>
@stop