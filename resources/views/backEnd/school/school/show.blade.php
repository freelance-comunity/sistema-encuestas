@extends('backLayout.app')
@section('title')
School
@stop

@section('content')

    <h1>School</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>State</th><th>Town</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $school->id }}</td> <td> {{ $school->name }} </td><td> {{ $school->state }} </td><td> {{ $school->town }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection