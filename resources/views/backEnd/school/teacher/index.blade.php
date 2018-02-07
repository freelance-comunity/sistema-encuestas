@extends('backLayout.app')
@section('title')
Teacher
@stop

@section('content')

    <h1>Teacher <a href="{{ url('school/teacher/create') }}" class="btn btn-primary pull-right btn-sm">Add New Teacher</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblschool/teacher">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Last Name</th><th>Second Lastname</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($teacher as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('school/teacher', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->last_name }}</td><td>{{ $item->second_lastname }}</td>
                    <td>
                        <a href="{{ url('school/teacher/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['school/teacher', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblschool/teacher').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection