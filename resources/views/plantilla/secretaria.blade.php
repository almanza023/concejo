<!DOCTYPE html>
<html lang="en">
<head>
	@include('partes/estilos')
</head>
<body>
	<div class="wrapper">	
		<div class="main-header" >
			<!-- Logo Header -->
			@include('partes/navbar')
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		@include('partes/sidebar_secretaria')
		<div class="main-panel">
			<div class="content" >
                @yield('content')
			</div>
			@include('partes/footer')
		</div>
	</div>
	
	@include('partes/script')
	<script src="{{ asset('archivos_js/init.js') }}"></script>
	@yield('scripts')
</body>
</html>