
@extends('template.plantilla')
@section('contenedor')
<hr>
<a href="{{route('personas.create')}}" class="btn btn-primary">Registrar</a>
<hr>
<!--<table border="1">
    <thead>
        
        <th>Carnet</th>
        <th>Correo Electronico</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Pais</th>
        <th>Ciudad</th>
        <th>Direccion</th>
    </thead>
    <tbody>

        @foreach ($personas as $persona)
            <tr>
                
                <td>{{$persona->carnet}}</td>
                <td>{{$persona->correo}}</td>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellido}}</td>
                <td>{{$persona->pais}}</td>
                <td>{{$persona->ciudad}}</td>
                <td>{{$persona->direccion}}</td>
                <td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>-->

<table class="table table-striped">
  <thead>
    <tr>
      <!--<th scope="col">#</th>-->
      <th scope="col">Carnet</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Pais</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Dirección</th>
    </tr>
  </thead>
  <!--<tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$persona->carnet}}</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>-->
  <tbody>

        @foreach ($personas as $persona)
            <tr>
                
                <td>{{$persona->carnet}}</td>
                <td>{{$persona->correo}}</td>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellido}}</td>
                <td>{{$persona->pais}}</td>
                <td>{{$persona->ciudad}}</td>
                <td>{{$persona->direccion}}</td>
                <td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection