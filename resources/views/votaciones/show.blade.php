@extends('plantilla.consejales')

@section('content')
<div class="panel-header bg-danger-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Modulo de Votación</h2>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="card  card-round">

        @if($cantidad>0)
        <div class="card-body ">
			<!-- Card -->
			<h4 class="page-title">Votaciones</h4>
			@foreach ($votaciones as $item)
            <div class="row">

				<div class="col-md-8">
                    <form action="{{ route('votaciones.store') }}" method="POST" id="form_votacion">
                        @csrf
                        <input type="text" name="proyecto_id" value="{{ $item->proyecto_id }}">
                        <input type="text" name="respuesta" id="respuesta" >
						<div class="card card-white  card-round card ">
							<div class="card-body text">
								<div class="pricing-header">
									<h2 class="fw-bold">Proyecto: <b>{{ $item->proyecto->nombre }}</b></h2>
                                    <span class="sub-title"></span>
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <div>
                                            <textarea id="observaciones"
                                             class="form-control" rows="10" name="observaciones">
                                            </textarea>
                                        </div>
                                    </div>
								</div>

							</div>
						</div>

                </div>
                <div class="col-md-4">
					<a class="stretched-link text-decoration-none nav-link " href=""  aria-haspopup="true" aria-expanded="false">
						<div class="card card-success card-annoucement card-round card-pricing2 ">
							<div class="card-body text-center">
								<div class="pricing-header">
									<h2 class="fw-bold">Ver Archivo:</h2>
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
            </div>
            <div class="text-center" id="opciones">
                <button type="button"  id="aprobar" value="1" class="btn btn-outline-success">Aprobar</button>
                <button type="button" id="rechazar" value="0" class="btn btn-outline-danger">Rechazar</button>
                <button type="submit"  class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
            @endforeach

		</div>
        @else
        <p>No Existen votaciones activas</p>
        @endif
	</div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('archivos_js/Votacion.js') }}"></script>
@endsection
