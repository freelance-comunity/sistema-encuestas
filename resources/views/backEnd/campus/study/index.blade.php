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
    <h1>Catálogo de planes de estudio
        <a href="{{ url('campus/study/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Plan</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="study">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th>Descripción corta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($study as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('campus/study', $item->id) }}">{{ $item->key }}</a>
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->short_description }}</td>
                    <td>
                        <a href="{{ url('campus/study/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['campus/study', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
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
        $('#study').DataTable({
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