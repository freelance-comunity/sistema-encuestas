@extends('backLayout.app')
@section('title')
User
@stop

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Email</th><th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td><td> {{ $user->password }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection