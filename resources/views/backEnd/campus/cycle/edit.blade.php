@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Editar ciclo
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
                    {!! Form::model($cycle, [ 'method' => 'PATCH', 'url' => ['campus/cycle', $cycle->id], 'class' => 'form-horizontal' ]) !!}

                    <div class="form-group {{ $errors->has('cycle_year') ? 'has-error' : ''}}">
                        {!! Form::label('cycle_year', 'Ciclo escolar: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('cycle_year', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('cycle_year',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('cycle_quarter') ? 'has-error' : ''}}">
                        {!! Form::label('cycle_quarter', 'Cuatrimestre escolar: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('cycle_quarter', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('cycle_quarter',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        {!! Form::label('description', 'Descripción: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('description',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('start_cycle') ? 'has-error' : ''}}">
                        {!! Form::label('start_cycle', 'Inicio de curso: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::date('start_cycle', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('start_cycle',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('end_cycle') ? 'has-error' : ''}}">
                        {!! Form::label('end_cycle', 'Fin de curso: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::date('end_cycle', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('end_cycle',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('admin_cycle_year') ? 'has-error' : ''}}">
                        {!! Form::label('admin_cycle_year', 'Ciclo administrativo: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('admin_cycle_year', null, ['class' => 'form-control']) !!} {!! $errors->first('admin_cycle_year', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('admin_cycle_quarter') ? 'has-error' : ''}}">
                        {!! Form::label('admin_cycle_quarter', 'Cuatrimestre administrativo: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])
                        !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('admin_cycle_quarter', null, ['class' => 'form-control']) !!} {!! $errors->first('admin_cycle_quarter',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('generation') ? 'has-error' : ''}}">
                        {!! Form::label('generation', 'Generación: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('generation', null, ['class' => 'form-control']) !!} {!! $errors->first('generation', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                        {!! Form::label('status', 'Estatus: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('status', ['1'=>'ACTIVO', '2'=>'INACTIVO'],null, ['class' => 'form-control']) !!} {!! $errors->first('status',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('campus_id') ? 'has-error' : ''}}">
                        {!! Form::label('campus_id', 'Plantel: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('campus_id', $campuses,null, ['class' => 'form-control']) !!} {!! $errors->first('campus_id', '
                            <p class="help-block">:message</p>') !!}
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