@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <h1>Posts
        <a href="{{ url('admin/posts/create') }}" class="btn btn-primary pull-right btn-sm">Add New Post</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="posts">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('admin/posts', $item->id) }}">{{ $item->title }}</a>
                    </td>
                    <td>{{ $item->body }}</td>
                    <td>
                        <a href="{{ url('admin/posts/' . $item->id . '/edit') }}" class="btn btn-round btn-primary">Update</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['admin/posts', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Delete',
                        ['class' => 'btn btn-round btn-danger']) !!} {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /page content -->
@endsection 
@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#posts').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
            }, ],
            order: [
                [0, "asc"]
            ],
        });
    });
</script>
@endpush