<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Sistema de Votaciones</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('csslogin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('csslogin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('csslogin/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
</head>
<body class="login-page" style="background-color: "#fff">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="" style="color:#000"> 
					Sistema de Votaciones
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="">Registrarse</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{asset('csslogin/vendors/images/principal.gif')}}" alt="" width="500px">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Inicio de Sesión</h2>
						</div>
						<form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="input-group custom">
                                <input id="usuario"  type="number" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus class="form-control form-control-lg" placeholder="Usuario">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group custom">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control form-control-lg" placeholder="**********">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group row m-t-20">
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-success w-md waves-effect waves-light">
                                        {{ __('Ingresar') }} <i class="fa fa-arrow-alt-circle-right"></i>
                                    </button>
                                   
                                </
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('csslogin/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('csslogin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('csslogin/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('csslogin/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>

