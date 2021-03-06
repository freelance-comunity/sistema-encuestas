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
    <h1>Catálogo de maestros
        <a href="{{ url('school/teacher/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Maestro</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="teacher">
            <thead class="heading">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacher as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('school/teacher', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->second_lastname }}</td>
                    <td>
                        <a href="{{ url('school/teacher/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['school/teacher', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
                        ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /page content -->
@endsection @push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#teacher').DataTable({
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