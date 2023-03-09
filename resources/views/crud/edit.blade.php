@extends("layout")
@section("contenido")
    <fieldset>
        <legend>Datos del alumno</legend>
        <form action="{{route("alumnos.store")}}" method="POST">
            @method('POST')
            @csrf
            Nombre<input type="text" value="{{$alumno->nombre}}" name="nombre" placeholder="Nombre" id="nombreId"/>
            Apellido<input type="text" value="{{$alumno->apellido}}" name="apellido" placeholder="Apellido" id="apellidoId"/>
            Dirección<input type="text" value="{{$alumno->direccion}}" name="direccion" placeholder="Dirección" id="direccionId"/>
            Dni<input type="text" value="{{$alumno->dni}}" name="dni" placeholder="DNI" id="dniId"/>
            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
@endsection
