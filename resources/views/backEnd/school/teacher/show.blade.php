@extends('backLayout.app')
@section('title')
Teacher
@stop

@section('content')

    <h1>Teacher</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Last Name</th><th>Second Lastname</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $teacher->id }}</td> <td> {{ $teacher->name }} </td><td> {{ $teacher->last_name }} </td><td> {{ $teacher->second_lastname }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection