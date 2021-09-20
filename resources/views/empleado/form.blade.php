    <h1>{{$modo}} empleado</h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach( $errors -> all() as $error)
               <li> {{ $error }} </li>
                @endforeach
            </ul>  
        </div>

    @endif

    <div class="form-group">
        <label for="Nombre">Nombre </label>
        <input type="text"  class="form-control" name="Nombre"  value="{{ isset($empleado-> Nombre) ? $empleado-> Nombre : old('Nombre') }}" id="Nombre">
    </div>
    <div class="form-group">
        <label for="Apellidos">Apellidos </label>
        <input type="text" class="form-control" name="Apellidos"  value="{{ isset($empleado-> Apellidos) ? $empleado-> Apellidos : old('Apellidos') }}" id="Apellidos">
    </div>
    <div class="form-group">
        <label for="Correo"> Correo </label>
        <input type="text" class="form-control" name="Correo"  value="{{ isset($empleado-> Correo) ? $empleado-> Correo : old('Correo') }}" id="Correo">
    </div>
    <div class="form-group">
        @if(isset($empleado ->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado-> Foto}}" alt="" style="width: 80px; heigth:80px">
        @endif
        <input type="file" class="form-control" name="Foto"  value="" id="Foto">
    </div> 
    <input type="submit" value="{{ $modo }} datos" class="btn btn-success">

    <a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>