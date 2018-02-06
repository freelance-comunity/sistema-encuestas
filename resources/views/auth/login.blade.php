<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Universidad Maya | Login</title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
				{!! BootForm::open(['url' => url('/login'), 'method' => 'post']) !!}
                    
				<h1>Inicio de sesión</h1>
			
				{!! BootForm::email('email', 'Correo electrónico', old('email'), ['placeholder' => 'Correo electrónico', 'afterInput' => '<span>test</span>'] ) !!}
			
				{!! BootForm::password('password', 'Contraseña', ['placeholder' => 'Contraseña']) !!}
				
				<div>
					{!! BootForm::submit('Entrar', ['class' => 'btn btn-default submit']) !!}
					<a class="reset_pass" href="{{  url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
				</div>
                    
				<div class="clearfix"></div>
                    
				<div class="separator">
					{{--  <p class="change_link">New to site?
						<a href="{{ url('/register') }}" class="to_register"> Create Account </a>
					</p>  --}}
                        
					<div class="clearfix"></div>
					<br />
                        
					<div>
						<h1><i class="fa fa-graduation-cap"></i> Universidad Maya</h1>
						<p>&copy; {{ date('Y') }} Todos los derechos reservados. Universidad Maya.</p>
					</div>
				</div>
				{!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>