<div class="table-responsive">
	<table id="basic-datatables" class="display table table-striped table-hover" >
		<thead>
			<tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Información Adicional</th>
                <th>Ruta</th>
                <th>Estado</th>
                <th>Opciones</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($proyectos as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->anexos }}</td>
                    <td>{{ $item->ruta }}</td>

                    <td>
                        @if($item->estado)
                        <button class="btn badge bg-success sm" style="color: #fff" onclick="changeEstado('{{ route('proyectos.status', $item->id) }}'); "><i class="fa fa-check"></i> Activo</button>
                        @else
                        <button class="btn badge bg-danger sm" style="color: #fff" onclick="changeEstado('{{ route('proyectos.status', $item->id) }}'); "><i class="fa fa-ban"></i> Inactivo</button>
                        @endif
                    </td>
                    <td>

                        <div class="btn-group m-b-10">
                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item show-details" data-toggle="modal" data-id="{{$item->id}}" data-nombre="{{$item->nombre}}" data-descripcion="{{$item->descripcion}}"
                                data-anexos="{{$item->anexos}}" data-target="#modalEdit"><i class="fa fa-edit"></i> Actualizar</a>

                                <a class="dropdown-item show-details" data-toggle="modal" data-id="{{$item->id}}" data-nombre="{{$item->nombre}}" data-descripcion="{{$item->descripcion}}"
                                    data-anexos="{{$item->anexos}}" data-target="#modalAutorizacion"><i class="fa fa-edit"></i> Autorizar Votación</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
		</tbody>
	</table>
</div>
