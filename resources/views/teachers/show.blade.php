@extends('teachers.layout')

@section('content')
<div class="card">
    <div class="card-header">Teacher Page</div>
    <div class="card-body">
        <div>
            <h5 class="card-title">First Name: {{ $teacher->First_name }}</h5>
            <p class="card-title">Middle Name: {{ $teacher->Middle_name }}</p>
            <p class="card-title">Last Name: {{ $teacher->Last_name }}</p>
            <p class="card-text">Age: {{ $teacher->Age }}</p>
            <p class="card-text">Education Level: {{ $teacher->Education_level }}</p>
            <p class="card-text">Teaching: {{ $teacher->Teaching }}</p>
        </div>
    </div>
</div>
@endsection