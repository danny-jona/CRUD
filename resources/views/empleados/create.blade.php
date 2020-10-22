Seccion crear empleados

<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="">
</br>
<label for="apellido">{{'Apellido'}}</label>
<input type="text" name="apellido" id="apellido" value="">
</br>
<label for="area">{{'Area'}}</label>
<input type="text" name="area" id="area" value="">
</br>
<label for="foto">{{'Foto'}}</label>
<input type="file" name="foto" id="foto" value="">
</br>

<input type="submit" value="Agregar">
</form>