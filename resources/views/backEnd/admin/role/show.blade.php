@extends('backLayout.app')
@section('title')
Role
@stop

@section('content')

    <h1>Role</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $role->id }}</td> <td> {{ $role->name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection