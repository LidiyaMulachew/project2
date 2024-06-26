@extends('teachers.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Teacher_page</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/teachers/create')}}" class="" title="Add Teacher Information">
                        
                      <button type="Add" class="btn btn-primary">Add</button>
                        
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First_name</th>
                                    <th>Middle_name</th>
                                    <th>Last_name</th>
                                    <th>Age</th>
                                    <th>Education_level</th>
                                    <th>Teaching</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->First_name}}</td>
                                    <td>{{ $item->Middle_name}}</td>
                                    <td>{{ $item->Last_name}}</td>
                                    <td>{{ $item->Age}}</td>
                                    <td>{{ $item->Education_level}}</td>
                                    <td>{{ $item->Teaching}}</td>
                                    <td>
                                    

                                        <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-warning btn-sm">Edit</button></a>
                                          
                                        <form action="{{ url('/teachers/' . $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection