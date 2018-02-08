@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Editar maestro
                        <small>Control Escolar</small>
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
                <div class="x_content"> {!! Form::model($teacher, [ 'method' => 'PATCH', 'url' => ['school/teacher', $teacher->id], 'class' =>
                    'form-horizontal' ]) !!}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Nombre* ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('name', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                        {!! Form::label('last_name', 'Apellido paterno*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('last_name',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('second_lastname') ? 'has-error' : ''}}">
                        {!! Form::label('second_lastname', 'Apellido materno*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('second_lastname', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('second_lastname',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        {!! Form::label('email', 'Correo electrónico*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('email', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                        {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::number('status', null, ['class' => 'form-control']) !!} {!! $errors->first('status', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div> --}}
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