@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Datos del alumno
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
                <div class="x_content">
                    {!! Form::open(['url' => 'school/student', 'class' => 'form-horizontal form-label-left']) !!}
                    <p class="lead">Datos del alumno</p>
                    <div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
                        {!! Form::label('student_id', 'Matricula', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('student_id', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('student_id',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Nombre(s)*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('name', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('name',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                        {!! Form::label('last_name', 'Apellido paterno*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('last_name', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('last_name',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('second_last_name') ? 'has-error' : ''}}">
                        {!! Form::label('second_last_name', 'Apellido materno*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('second_last_name', null, ['class' => 'form-control']) !!} {!! $errors->first('second_last_name', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                        {!! Form::label('gender', 'Sexo*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('gender', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'],null, ['class' => 'form-control', 'required'
                            => 'required']) !!} {!! $errors->first('gender', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : ''}}">
                        {!! Form::label('birthdate', 'Fecha de nacimiento', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::date('birthdate', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('birthdate',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('state_birth') ? 'has-error' : ''}}">
                        {!! Form::label('state_birth', 'Estado de nacimiento*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('state_birth', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('state_birth',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('town_birth') ? 'has-error' : ''}}">
                        {!! Form::label('town_birth', 'Municipio de nacimiento*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('town_birth', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('town_birth',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('curp') ? 'has-error' : ''}}">
                        {!! Form::label('curp', 'CURP*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('curp', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('curp', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('sep') ? 'has-error' : ''}}">
                        {!! Form::label('sep', 'Matricula SEP*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('sep', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('sep', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('languages') ? 'has-error' : ''}}">
                        {!! Form::label('languages', 'Idiomas dominados', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('languages', null, ['class' => 'form-control']) !!} {!! $errors->first('languages', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <p class="lead">Datos de contacto</p>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                        {!! Form::label('phone', 'Teléfono', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!} {!! $errors->first('phone', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('cell_phone') ? 'has-error' : ''}}">
                        {!! Form::label('cell_phone', 'Celular*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('cell_phone', null, ['class' => 'form-control']) !!} {!! $errors->first('cell_phone', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        {!! Form::label('email', 'Correo electrónico*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('email', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('social_networks') ? 'has-error' : ''}}">
                        {!! Form::label('social_networks', 'Redes sociales', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('social_networks', null, ['class' => 'form-control']) !!} {!! $errors->first('social_networks', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <p class="lead">Domicilio</p>
                    <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                        {!! Form::label('country', 'País*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('country',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                        {!! Form::label('state', 'Estado*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('state', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('state', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('town') ? 'has-error' : ''}}">
                        {!! Form::label('town', 'Municipio*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('town', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('town', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('post_code') ? 'has-error' : ''}}">
                        {!! Form::label('post_code', 'Código postal', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('post_code', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('post_code',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
                        {!! Form::label('street', 'Calle*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('street', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('street', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('house_number') ? 'has-error' : ''}}">
                        {!! Form::label('house_number', 'Número', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('house_number', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('house_number',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('colony') ? 'has-error' : ''}}">
                        {!! Form::label('colony', 'Colonia', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('colony', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('colony', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <p class="lead">Datos del tutor</p>
                    <div class="form-group {{ $errors->has('tutor_name') ? 'has-error' : ''}}">
                        {!! Form::label('tutor_name', 'Nombre completo', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('tutor_name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('tutor_name',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('in_law') ? 'has-error' : ''}}">
                        {!! Form::label('in_law', 'Parentesco', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('in_law', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('in_law', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tutor_phone') ? 'has-error' : ''}}">
                        {!! Form::label('tutor_phone', 'Teléfono*', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('tutor_phone', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('tutor_phone',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tutor_email') ? 'has-error' : ''}}">
                        {!! Form::label('tutor_email', 'Correo electrónico', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::email('tutor_email', null, ['class' => 'form-control']) !!} {!! $errors->first('tutor_email', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tutor_address') ? 'has-error' : ''}}">
                        {!! Form::label('tutor_address', 'Domicilio', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('tutor_address', null, ['class' => 'form-control']) !!} {!! $errors->first('tutor_address', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <p class="lead">Escuela de procedencia</p>
                    <div class="form-group {{ $errors->has('school_origin_id') ? 'has-error' : ''}}">
                        {!! Form::label('school_origin_id', 'Nombre de escuela', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('school_origin_id', null, ['class' => 'form-control']) !!} {!! $errors->first('school_origin_id', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('average') ? 'has-error' : ''}}">
                        {!! Form::label('average', 'Promedio', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('average', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('average',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('shift') ? 'has-error' : ''}}">
                        {!! Form::label('shift', 'Turno', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('shift',['Matutino'=>'Matutino', 'Vespertino'=>'Vespertino', 'Mixto'=>'Mixto', 'Otro'=>'Otro'], null, ['class' => 'form-control']) !!} {!! $errors->first('shift', '
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
@endsection