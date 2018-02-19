@extends('backLayout.app')
@section('title')
Department
@stop

@section('content')

    <h1>Department</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Description</th><th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $department->id }}</td> <td> {{ $department->name }} </td><td> {{ $department->description }} </td><td> {{ $department->status }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection