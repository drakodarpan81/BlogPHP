@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')

<h1>
    Deja tu mensaje
</h1>

<form action=" {{route('contactanos.store')}} " method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>

@error('name')
        <br>
        <small> *{{$message}} </small>
    @enderror

    <br>
    
    <label>
        correo:
        <br>
        <input type="text" name="correo">
    </label>

@error('correo')
        <br>
        <small> *{{$message}} </small>
    @enderror

    <br>
    
    <label>
        Mensaje:
        <br>
        <textarea rows="4" name="mensaje"></textarea>
    </label>

@error('mensaje')
        <br>
        <small> *{{$message}} </small>
    @enderror

    <br>
    
    <button type="submit">Enviar mensaje</button>
</form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection