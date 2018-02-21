@extends('backLayout.app')
@section('title')
Cycle
@stop

@section('content')

    <h1>Cycle</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Cycle Year</th><th>Cycle Quarter</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cycle->id }}</td> <td> {{ $cycle->cycle_year }} </td><td> {{ $cycle->cycle_quarter }} </td><td> {{ $cycle->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection