@extends('template.plantilla')
@section('contenedor')

<form class="row g-3 needs-validation" action="{{ route('personas.store')}}" method="POST" novalidate>
    @csrf
    <div>
        <label for="">Carnet</label>
        <input type="text" name="carnet" class="form-control" required >
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>

        @error('carnet')
                <small>*{{$message}}</small>
            <br>
        @enderror
    </div>
    <div>
        <label for="">Correo Electronico</label>
        <input type="email" name="correo" class="form-control" required value="{{old('correo')}}">
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>

        @error('correo')
                <small>*{{$message}}</small>
            <br>
        @enderror
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" required value="{{old('nombre')}}">
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>

        @error('nombre')
                <small>*{{$message}}</small>
            <br>
        @enderror

    </div>
    <div>
        <label for="">Apellidos</label>
        <input type="text" name="apellido" class="form-control" required value="{{old('apellido')}}">
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>

        @error('nombre')
                <small>*{{$message}}</small>
            <br>
        @enderror

    </div>
    <div>
        <label for="">Pais</label>
        <input type="text" name="pais" class="form-control" required value="{{old('pais')}}">
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>

        @error('pais')
                <small>*{{$message}}</small>
            <br>
        @enderror

    </div>
    <div>
        <label for="">Ciudad</label>
        <input type="text" name="ciudad" class="form-control" required value="{{old('ciudad')}}">
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>
    </div>
    <div>
        <label for="">Direccion</label>
        <input type="text" name="direccion" class="form-control" required value="{{old('direccion')}}">
        <div class="valid-feedback">Campo OK</div>
        <div class="invalid-feedback">Campo Obligatorio!!</div>
    </div>
    <div>
        <hr>
        <input type="submit" value="Guardar" class="btn btn-success">
        <a href="{{route('personas.index')}}" class="btn btn-primary">Atras</a>
        <hr>
    </div>
</form>


@endsection