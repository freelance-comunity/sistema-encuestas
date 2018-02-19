@extends('backLayout.app')
@section('title')
Group
@stop

@section('content')

    <h1>Group</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Grade</th><th>Group</th><th>Mode</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $group->id }}</td> <td> {{ $group->grade }} </td><td> {{ $group->group }} </td><td> {{ $group->mode }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection