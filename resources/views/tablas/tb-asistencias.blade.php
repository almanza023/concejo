<div class="table-responsive">
	<table id="basic-datatables" class="display table table-striped table-hover" >
		<thead>
			<tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Asistente</th>
                <th>Partido</th>
                <th>Logo</th>
                <th>Estado</th>
                <th>Opciones</th>									
			</tr>
		</thead>
		<tbody>
            @foreach ($asistencias as $asistencia)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $asistencia->fecha }}</td>
                    <td>{{ $asistencia->nombres.' '. $asistencia->apellidos}}</td>
                    <th>{{ $asistencia->nombre }}</th>
                    <th>{{ $asistencia->logo }}</th>
                </tr>
            @endforeach						
		</tbody>
	</table>
</div>