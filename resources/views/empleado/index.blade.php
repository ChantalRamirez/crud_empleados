Mostrar la lista de empleados :)

@if(Session::has('mensaje'))
{{ Session:: get('mensaje')}}
@endif

<a href="{{ url('empleado/create') }}">Registrar nuevo empleado </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado-> id}}</td>

            <td>
                <img src="{{ asset('storage').'/'.$empleado-> Foto}}" alt="" style="width: 200px; heigth:200px">
            </td>

            <td>{{$empleado-> Nombre}}</td>
            <td>{{$empleado-> Apellidos}}</td>
            <td>{{$empleado-> Correo}}</td>
            <td>
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                Editar
            </a>
            | 
            
            <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Borrar" onclick="return confirm('¿Quieres borrar?')">
            
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
