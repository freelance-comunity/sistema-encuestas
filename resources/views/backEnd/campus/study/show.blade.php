@extends('backLayout.app')
@section('title')
Study
@stop

@section('content')

    <h1>Study</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Key</th><th>Description</th><th>Short Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $study->id }}</td> <td> {{ $study->key }} </td><td> {{ $study->description }} </td><td> {{ $study->short_description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection