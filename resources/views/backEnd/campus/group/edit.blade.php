@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear grupo
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
                   {!! Form::model($group, [ 'method' => 'PATCH', 'url' => ['campus/group', $group->id], 'class' => 'form-horizontal' ]) !!}

                    <div class="form-group {{ $errors->has('grade') ? 'has-error' : ''}}">
                        {!! Form::label('grade', 'Grado: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('grade', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('grade', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('group') ? 'has-error' : ''}}">
                        {!! Form::label('group', 'Grupo: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('group', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('group', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('mode') ? 'has-error' : ''}}">
                        {!! Form::label('mode', 'Modalidad: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('mode', ['ESCOLARIZADO'=>'ESCOLARIZADO', 'SEMIESCOLARIZADO'=>'SEMIESCOLARIZADO'],null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('mode', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('campus_id') ? 'has-error' : ''}}">
                        {!! Form::label('campus_id', 'Plantel: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('campus_id', $campuses,null, ['class' => 'form-control']) !!} {!! $errors->first('campus_id', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>


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