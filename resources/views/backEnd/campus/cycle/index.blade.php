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
    <h1>Catálogo de ciclos
        <a href="{{ url('campus/cycle/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Ciclo</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="cycle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ciclo escolar</th>
                    <th>Descripción</th>
                    <th>Inicio de curso</th>
                    <th>Fin de curso</th>
                    <th>Ciclo administrativo</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cycle as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('campus/cycle', $item->id) }}">{{ $item->cycle_year }}-{{$item->cycle_quarter}}</a>
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->start_cycle }}</td>
                    <td>{{ $item->end_cycle }}</td>
                    <td>{{ $item->admin_cycle_year}}-{{$item->admin_cycle_quarter}}</td>
                    <td>
                        @if($item->status === 1)
                        ACTIVO
                        @elseif($item->status === 0)
                        INACTIVO
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('campus/cycle/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['campus/cycle', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
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
        $('#cycle').DataTable({
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