@extends('plantilla.secretaria')

@section('content')
    <div class="panel-header bg-danger-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Modulo de Secretaria</h2>
				<h5 class="text-white op-7 mb-2"></h5>
			</div>
							
		</div>
	</div>
    </div> 									                             
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
				<div class="card full-height">
					<div class="card-body">
                        <!-- Card -->
                        <div class="row">
                            <div class="col-md-4">
                                <a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
                                    <div class="card card-success card-annoucement card-round card-pricing2 ">
                                        <div class="card-body text-center">
                                            <div class="pricing-header">
                                                <h2 class="fw-bold">Verificación Cuor</h2>
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
                                <a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
                                    <div class="card card-primary card-annoucement card-round card-pricing2 ">
                                        <div class="card-body text-center">
                                            <div class="pricing-header">
                                                <h2 class="fw-bold">Proyectos de ley</h2>
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
                                                <h2 class="fw-bold">Observaciones</h2>
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
        </div>		
    </div>
@endsection