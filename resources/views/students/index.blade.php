@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Student_page</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/student/create')}}" class="btn btn-success btn-sm" title="Add Student Information">
                        <i class="fa fa-plus" aria-hidden="true"></i>
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
                                    <th>Grade</th>
                                    <th>Major</th>
                                    <th>Teacher_name</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->First_name}}</td>
                                    <td>{{ $item->Middle_name}}</td>
                                    <td>{{ $item->Last_name}}</td>
                                    <td>{{ $item->Age}}</td>
                                    <td>{{ $item->Grade}}</td>
                                    <td>{{ $item->Major}}</td>
                                    <td>{{ $item->Teacher_name}}</td>

                                    <td>
                                    
                                        <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-primary btn-sm">View</button></a>

                                        <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-warning btn-sm">Edit</button></a>
                                         
                                        <form action="{{ url('/student/' . $item->id) }}" method="post">
                                             @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student">Delete</button>
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