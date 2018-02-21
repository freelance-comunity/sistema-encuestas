@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Editar usuario
                        <small>Plantel</small>
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
                    {!! Form::model($user, [ 'method' => 'PATCH', 'url' => ['admin/user', $user->id], 'class' => 'form-horizontal' ]) !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Nombre completo: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('name', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        {!! Form::label('email', 'Correo electrónico: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('email', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        {!! Form::label('password', 'Contraseña: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::password('password', ['class' => 'form-control']) !!} {!! $errors->first('password',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group @if ($errors->has('roles')) has-error @endif">
                        {!! Form::label('roles[]', 'Roles:', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null, ['class' => 'form-control',
                            'multiple']) !!} @if ($errors->has('roles'))
                            <p class="help-block">{{ $errors->first('roles') }}</p> @endif
                        </div>
                    </div>
                    <!-- Permissions -->
                    @if(isset($user)) @include('shared._permissions', ['closed' => 'true', 'model' => $user ]) @endif

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="reset" class="btn btn-lg btn-primary">Limpiar</button>
                            <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection @if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif