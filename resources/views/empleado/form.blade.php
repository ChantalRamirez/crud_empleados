    <h1>{{$modo}} empleado</h1>

    <label for="Nombre">Nombre </label>
    <input type="text" name="Nombre"  value="{{ isset($empleado-> Nombre) ? $empleado-> Nombre : ''}}" id="Nombre">
    <br>
    <label for="Apellidos">Apellidos </label>
    <input type="text" name="Apellidos"  value="{{ isset($empleado-> Apellidos) ? $empleado-> Apellidos : '' }}" id="Apellidos">
    <br>
    <label for="Correo"> Correo </label>
    <input type="text" name="Correo"  value="{{ isset($empleado-> Correo) ? $empleado-> Correo : '' }}" id="Correo">
    <br>
    <label for="Foto"> Foto </label>
    @if(isset($empleado ->Foto))
    <img src="{{ asset('storage').'/'.$empleado-> Foto}}" alt="" style="width: 200px; heigth:200px">
    @endif
    <input type="file" name="Foto"  value="" id="Foto">
    <br>
    <input type="submit" value="{{ $modo }} datos">

    <a href="{{ url('empleado/') }}">Regresar</a>