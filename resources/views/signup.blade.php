@extends('layout')
@section('content')
<div class="row justify-content-center mt-5">
<div class="col-md-6">

<div class="card">
<div class="card-header">
    <h1 class="card-title" style="text-align: center;">Signup</h1>
</div>
    <div class="card-body">

    
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
        @endif


        <form method="POST" action="{{ route('admin.signup') }}">
            @csrf
            <label>First Name</label>
            <input type="text" name="First_name" id="First_name" value="{{ isset($users) ? $users->First_name : '' }}" class="form-control"/><br/>
            <label>Middle Name</label>
            <input type="text" name="Middle_name" id="Middle_name" value="{{ isset($users) ? $users->Middle_name : '' }}" class="form-control"/><br/>
            <label>Last Name</label>
            <input type="text" name="Last_name" id="Last_name" value="{{ isset($users) ? $users->Last_name : '' }}" class="form-control"/><br/>
            <label>Email</label>
            <input type="email" name="Email" id="Email" value="{{ isset($users) ? $users->Email : '' }}" class="form-control"/><br/>
            <label>Password</label>
            <input type="password" name="Password" id="Password" value="{{ isset($users) ? $users->Password : '' }}" class="form-control"/><br/>


            <a href="{{url('/views/admin')}}" class="" title="">
                    <button type="submit" class="btn btn-primary">Signup</button>



        </form>
    </div>
</div>
</div>

</div>

@stop