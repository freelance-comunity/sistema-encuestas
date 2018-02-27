@extends('backLayout.app')
@section('title')
Question
@stop

@section('content')

    <h1>Question <a href="{{ url('poll/question/create') }}" class="btn btn-primary pull-right btn-sm">Add New Question</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblpoll/question">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Type Of Response</th><th>Required</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($question as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('poll/question', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->type_of_response }}</td><td>{{ $item->required }}</td>
                    <td>
                        <a href="{{ url('poll/question/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['poll/question', $item->id],
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
        $('#tblpoll/question').DataTable({
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