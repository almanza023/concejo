@if($crear)
<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" required />
</div>

<div class="form-group">
    <label>Descripción</label>
   <textarea name="descripcion" id="descripcion" cols="1" rows="2" class="form-control" required>

   </textarea>
</div>

<div class="form-group">
    <label>Información Extra</label>
    <textarea name="anexos" id="anexos" cols="1" rows="2" class="form-control">
    </textarea>
</div>


<div class="form-group">
    <label>Archivo</label>
   <input type="file" name="archivo" id="archivo" class="form-control">
    </textarea>
</div>


@endif

@if($editar)
<input type="hidden" name="id" id="id">
<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre_e"  class="form-control" required />
</div>

<div class="form-group">
    <label>Descripción</label>
   <textarea name="descripcion" id="descripcion_e" cols="1" rows="2" class="form-control" required>

   </textarea>
</div>

<div class="form-group">
    <label>Información Extra</label>
    <textarea name="anexos" id="anexos_e" cols="1" rows="2" class="form-control">
    </textarea>
</div>




@endif
