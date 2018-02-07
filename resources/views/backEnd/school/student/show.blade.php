@extends('backLayout.app')
@section('title')
Student
@stop

@section('content')

    <h1>Student</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Student Id</th><th>Name</th><th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->id }}</td> <td> {{ $student->student_id }} </td><td> {{ $student->name }} </td><td> {{ $student->last_name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection