<div class="table-responsive">
	<table id="basic-datatables" class="display table table-striped table-hover" >
		<thead>
			<tr>
                <th>N°</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Documento</th>
                <th>Género</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Cargo</th>
                <th>Partido</th>
                <th>Estado</th>
                <th>Opciones</th>									
			</tr>
		</thead>
		<tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $persona->nombres }}</td>
                    <td>{{ $persona->apellidos }}</td>
                    <td>{{ $persona->documento }}</td>
                    <td>{{ $persona->genero }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>{{ $persona->direccion }}</td>
                    <td>{{ $persona->cargo->nombre }}</td>
                    <td>{{ $persona->partido->nombre }}</td>
                    <td>
                        @if($persona->estado)
                        <button class="btn badge bg-success sm" style="color: #fff" onclick="changeEstado('{{ route('personas.status', $persona->id) }}'); "><i class="fa fa-check"></i> Activo</button>
                        @else
                        <button class="btn badge bg-danger sm" style="color: #fff" onclick="changeEstado('{{ route('personas.status', $persona->id) }}'); "><i class="fa fa-ban"></i> Inactivo</button>
                        @endif
                    </td>
                    <td>

                        <div class="btn-group m-b-10">
                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item show-details" data-toggle="modal" data-id="{{$persona->id}}" data-nombres="{{$persona->nombres}}" data-apellidos="{{$persona->apellidos}}"
                                data-documento="{{$persona->documento}}" data-genero="{{$persona->genero}}" data-telefono="{{$persona->telefono}}" data-direccion="{{$persona->direccion}}" 
                                data-cargo_id="{{$persona->cargo_id}}" data-partido_id="{{$persona->partido_id}}" data-target="#modalEdit"><i class="fa fa-edit"></i> Actualizar</a>
                                
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach						
		</tbody>
	</table>
</div>