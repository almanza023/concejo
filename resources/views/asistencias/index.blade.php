@extends('plantilla.secretaria')

@section('content')
    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Administración</h2>
				<h5 class="text-white op-7 mb-2">Asistencias</h5>
			</div>
							
		</div>
	</div>
    </div> 									                             
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
				<div class="card full-height">
					<div class="card-body">
                    <div class="col-md-12">
							<div class="card"><br>
								<button type="button" class="btn btn-outline-primary waves-effect waves-light" 
									data-toggle="modal" data-target="#ModalPersona">
									<i class="fa fa-plus-circle"></i> Agregar Persona 
								</button><br>
								<div id="id_table">
									@include('tablas.tb-asistencias')
								</div>
							</div>
						</div>
                    </div>	
                </div>	
            </div>	
        </div>		
    </div>
	<form id="form_hidden" style="display:none" action="{{route('asistencias.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
	
	@endsection

	@section('scripts')
	<script>
		
	</script>
	<script src="{{ asset('archivos_js/Asistencia.js') }}"></script>
@endsection