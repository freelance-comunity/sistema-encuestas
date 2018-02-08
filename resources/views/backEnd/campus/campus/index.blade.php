@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    @if(session()->has('message'))
    <div class="x_content bs-example-popovers">
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h3><strong>Mensaje del sistema:</strong> {{ session()->get('message') }}</h3>
        </div>
    </div>
    @endif
    <h1>Catálogo de planteles
        <a href="{{ url('campus/campus/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Plantel</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="campus">
            <thead class="heading">
                <tr>
                    <th>ID</th>
                    <th>Campus Id</th>
                    <th>Name</th>
                    <th>Corporate Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($campus as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('campus/campus', $item->id) }}">{{ $item->campus_id }}</a>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->corporate_name }}</td>
                    <td>
                        <a href="{{ url('campus/campus/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['campus/campus', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
                        ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
<!-- /page content -->
@endsection @push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#campus').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
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