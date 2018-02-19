@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear plan de estudio
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
                    {!! Form::open(['url' => 'campus/study', 'class' => 'form-horizontal']) !!}

                    <div class="form-group {{ $errors->has('key') ? 'has-error' : ''}}">
                        {!! Form::label('key', 'Clave de plan de estudio: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('key', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('key', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        {!! Form::label('description', 'Descripción: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('description',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
                        {!! Form::label('short_description', 'Descripción corta: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('short_description', null, ['class' => 'form-control']) !!} {!! $errors->first('short_description', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('credits') ? 'has-error' : ''}}">
                        {!! Form::label('credits', 'Créditos: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('credits', null, ['class' => 'form-control']) !!} {!! $errors->first('credits', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('number_grades') ? 'has-error' : ''}}">
                        {!! Form::label('number_grades', 'Número de grados: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('number_grades', null, ['class' => 'form-control']) !!} {!! $errors->first('number_grades', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('career_id') ? 'has-error' : ''}}">
                        {!! Form::label('career_id', 'Carrera: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('career_id', $careers,null, ['class' => 'form-control']) !!} {!! $errors->first('career_id', '
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