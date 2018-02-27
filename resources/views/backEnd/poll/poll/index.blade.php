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
    <h1>Catalogo de encuestas
        <a href="{{ url('poll/poll/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nueva Encuesta</a>
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="poll">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($poll as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('poll/poll', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('addQuestion')}}/{{$item->id}}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Agregar pregunta</a>
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> Vista prevía</a>
                        <a href="{{ url('poll/poll/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['poll/poll', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
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
        $('#poll').DataTable({
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