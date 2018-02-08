@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear plantel
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
                    {!! Form::open(['url' => 'campus/campus', 'class' => 'form-horizontal']) !!}

                    <div class="form-group {{ $errors->has('campus_id') ? 'has-error' : ''}}">
                        {!! Form::label('campus_id', 'Plantel Id*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('campus_id', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('campus_id',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Nombre de plantel*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('name', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('name', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('corporate_name') ? 'has-error' : ''}}">
                        {!! Form::label('corporate_name', 'Razón social*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('corporate_name', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('corporate_name',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('rfc') ? 'has-error' : ''}}">
                        {!! Form::label('rfc', 'RFC*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('rfc', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('rfc', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                        {!! Form::label('address', 'Domicilio*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('address', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('address',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('number_outside') ? 'has-error' : ''}}">
                        {!! Form::label('number_outside', 'Número exterior*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('number_outside', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('number_outside', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('number_inside') ? 'has-error' : ''}}">
                        {!! Form::label('number_inside', 'Número interior', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('number_inside', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('number_inside', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('reference') ? 'has-error' : ''}}">
                        {!! Form::label('reference', 'Referencia de domicilio', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('reference', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('reference', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('postal_code') ? 'has-error' : ''}}">
                        {!! Form::label('postal_code', 'Código postal*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('postal_code', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('postal_code',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
                        {!! Form::label('city', 'Ciudad*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('city', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('city', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('colony') ? 'has-error' : ''}}">
                        {!! Form::label('colony', 'Colonia*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('colony', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('colony', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('federal_entity') ? 'has-error' : ''}}">
                        {!! Form::label('federal_entity', 'Estado*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('federal_entity', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('federal_entity',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                        {!! Form::label('country', 'País*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('country', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('country',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('campus_key') ? 'has-error' : ''}}">
                        {!! Form::label('campus_key', 'Clave de plantel (SEP)*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('campus_key', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('campus_key',
                            '
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