@if($crear)
<div class="form-group">
    <label>Nombres</label>
    <input type="text" name="nombres" id="nombres" class="form-control" required />
</div>  

<div class="form-group">
    <label>Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" class="form-control" required />
</div>               

<div class="form-group">
    <label>Documento</label>
    <input type="number" name="documento" id="documento" class="form-control" required />
</div>

<div class="form-group">
    <label>Género</label>
    <input type="text" name="genero" id="genero" class="form-control" required />
</div>

<div class="form-group">
    <label>Telefono</label>
    <input type="text" name="telefono" id="telefono" class="form-control" required />
</div>      

<div class="form-group">
    <label>Direccion</label>
    <input type="text" name="direccion" id="direccion" class="form-control" required />
</div> 

<div class="form-group">
    <label>Cargo</label>
    <div>
        <select name="cargo_id" id="cargo_id" class="form-control">
            @foreach ($cargos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>$
            @endforeach
        </select>
    </div>
</div>  

<div class="form-group">
    <label>Cargo</label>
    <div>
        <select name="partido_id" id="partido_id" class="form-control">
            @foreach ($partidos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>$
            @endforeach
        </select>
    </div>
</div>  
@endif

@if($editar)
<input type="hidden" id="id" name="id">
<div class="form-group">
    <label>Nombres</label>
    <input type="text" name="nombres" id="nombres_e" class="form-control" required />
</div>  

<div class="form-group">
    <label>Apellidos</label>
    <input type="text" name="apellidos" id="apellidos_e" class="form-control" required />
</div>               

<div class="form-group">
    <label>Documento</label>
    <input type="number" name="documento" id="documento_e" class="form-control" required />
</div>

<div class="form-group">
    <label>Género</label>
    <input type="text" name="genero" id="genero_e" class="form-control" required />
</div>

<div class="form-group">
    <label>Telefono</label>
    <input type="text" name="telefono" id="telefono_e" class="form-control" required />
</div>      

<div class="form-group">
    <label>Direccion</label>
    <input type="text" name="direccion" id="direccion_e" class="form-control" required />
</div> 

<div class="form-group">
    <label>Cargo</label>
    <div>
        <select name="cargo_id" id="cargo_id" class="form-control">
            @foreach ($cargos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>$
            @endforeach
        </select>
    </div>
</div>  

<div class="form-group">
    <label>Cargo</label>
    <div>
        <select name="partido_id" id="partido_id" class="form-control">
            @foreach ($partidos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>$
            @endforeach
        </select>
    </div>
</div>                
@endif