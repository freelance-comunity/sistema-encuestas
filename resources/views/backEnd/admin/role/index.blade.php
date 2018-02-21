@extends('layouts.blank') 
@section('title')
Roles
@endsection 
@section('main_container')
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
<!-- Modal -->
<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
  <div class="modal-dialog" role="document">
    {!! Form::open(['method' => 'post']) !!}

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="roleModalLabel">Rol</h4>
      </div>
      <div class="modal-body">
        <!-- name Form Input -->
        <div class="form-group @if ($errors->has('name')) has-error @endif">
          {!! Form::label('name', 'Nombre') !!} {!! Form::text('name', null, ['class' => 'form-control input-lg', 'placeholder' => 'Nombre del rol']) !!} @if ($errors->has('name'))
          <p class="help-block">{{ $errors->first('name') }}</p> @endif
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        <!-- Submit Form Button -->
        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
{{-- End modal --}}
<h1>Catálogo de roles @can('agregar_roles')<a href="#" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#roleModal"> <i class="glyphicon glyphicon-plus"></i> Agregar Nuevo Rol</a>@endcan</h1>
 <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Roles del sistema
                        <small>Control</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                @can('ver_roles')
    @forelse ($roles as $role)
        {!! Form::model($role, ['method' => 'PUT', 'route' => ['role.update',  $role->id ], 'class' => 'm-b']) !!}

        @if($role->name === 'Administrador')
            @include('shared._permissions', [
                          'title' => $role->name .' Permisos',
                          'options' => ['disabled'] ])
        @else
            @include('shared._permissions', [
                          'title' => $role->name .' Permisos',
                          'model' => $role ])
            @can('editar_roles')
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            @endcan
        @endif

        {!! Form::close() !!}

    @empty
        <p>Sin roles definidos, ejecute  <code>php artisan db:seed</code> para generar algunos datos.</p>
    @endforelse
    </div>
    @endcan
            </div>
        </div>
    </div>
</div>
@endsection