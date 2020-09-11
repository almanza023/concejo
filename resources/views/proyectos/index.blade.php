@extends('plantilla.secretaria')

@section('content')
    <div class="panel-header bg-danger-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Administración</h2>
				<h5 class="text-white op-7 mb-2">Proyectos</h5>
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
								<button type="button" class="btn btn-outline-success waves-effect waves-light"
									data-toggle="modal" data-target="#ModalProyecto">
									<i class="fa fa-plus-circle"></i> Agregar
								</button><br>
								<div id="id_table">
									@include('tablas.tb-proyectos')
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<form id="form_hidden" style="display:none" action="{{route('proyectos.index')}}" method="GET"><input type="hidden" name="opcion" value="ok"></form>
	@include('modals.create-proyecto')
	@include('modals.edit-proyecto')
	@include('modals.autorizacion-proyecto')
	@endsection

	@section('scripts')
	<script>

	</script>
	<script src="{{ asset('archivos_js/Proyectos.js') }}"></script>
@endsection
