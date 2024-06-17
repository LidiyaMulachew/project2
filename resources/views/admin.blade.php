@extends('layout')
@section('content')


<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title" style="text-align: center;">Signup</h1>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <a href="{{ url('/students') }}" class="btn btn-primary mx-1" title="">Student</a>
                <a href="{{ url('/teachers') }}" class="btn btn-primary mx-1" title="">Teacher</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop