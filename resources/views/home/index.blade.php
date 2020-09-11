@extends('plantilla.consejales')

@section('content')
<div class="panel-header bg-danger-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Modulo de Concejo</h2>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="card  card-round">
		<div class="card-body ">
			<!-- Card -->
			<h4 class="page-title">Bienvenido!</h4>
			<div class="row">
				<div class="col-md-4">
					<a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
						<div class="card card-success card-annoucement card-round card-pricing2 ">
							<div class="card-body text-center">
								<div class="pricing-header">
									<h2 class="fw-bold">Proyectos</h2>
									<span class="sub-title"></span>
								</div>
								<div class="price-value">
									<div class="value">
									<img src="{{asset('img/1.png')}}" alt="" width="72px">
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="stretched-link text-decoration-none nav-link " href="{{ route('votaciones.index') }}"  aria-haspopup="true" aria-expanded="false">
						<div class="card card-primary card-annoucement card-round card-pricing2 ">
							<div class="card-body text-center">
								<div class="pricing-header">
									<h2 class="fw-bold">Votación</h2>
									<span class="sub-title"></span>
								</div>
								<div class="price-value">
									<div class="value">
									<img src="{{asset('img/2.png')}}" alt="" width="72px">
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-4">
					<a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
						<div class="card card-secondary card-annoucement card-round card-pricing2 ">
							<div class="card-body text-center">
								<div class="pricing-header">
									<h2 class="fw-bold">Votación Secreta</h2>
									<span class="sub-title"></span>
								</div>
								<div class="price-value">
									<div class="value">
									<img src="{{asset('img/3.png')}}" alt="" width="72px">
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
						<div class="card card-warning card-annoucement card-round card-pricing2 ">
							<div class="card-body text-center">
								<div class="pricing-header">
									<h2 class="fw-bold">Recursos</h2>
									<span class="sub-title"></span>
								</div>
								<div class="price-value">
									<div class="value">
									<img src="{{asset('img/4.png')}}" alt="" width="72px">
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
						<div class="card card-danger card-annoucement card-round card-pricing2 ">
							<div class="card-body text-center">
								<div class="pricing-header">
									<h2 class="fw-bold">Salir</h2>
									<span class="sub-title"></span>
								</div>
								<div class="price-value">
									<div class="value">
									<img src="{{asset('img/5.png')}}" alt="" width="72px">
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
