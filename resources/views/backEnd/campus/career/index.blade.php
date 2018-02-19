@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    @if(session()->has('message'))
    <div class="x_content bs-example-popovers">
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h3>
                <strong>Mensaje del sistema:</strong> {{ session()->get('message') }}</h3>
        </div>
    </div>
    @endif
    <h1>Catálogo de carreras
        <a href="{{ url('campus/career/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nueva Carrera</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="career">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Clave de carrera</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($career as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('campus/career', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ $item->career_key }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('campus/career/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['campus/career', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
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
        $('#career').DataTable({
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