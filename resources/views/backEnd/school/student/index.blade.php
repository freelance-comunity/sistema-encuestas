@extends('layouts.blank') @section('main_container') 
<!-- page content -->
<div class="right_col" role="main">
    @if(session()->has('message'))
    <div class="x_content bs-example-popovers">
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Mensaje del sistema:</strong> {{ session()->get('message') }}
        </div>
    </div>
    @endif
    <h1>Catálogo de alumnos
        <a href="{{ url('school/student/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Alumno</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="student">
            <thead>
                <tr class="headings">
                    <th>ID</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('school/student', $item->id) }}">{{ $item->student_id }}</a>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>
                        <a href="{{ url('school/student/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['school/student', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
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
        $('#student').DataTable({
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