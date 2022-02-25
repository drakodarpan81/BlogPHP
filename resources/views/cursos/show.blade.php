@extends('layouts.plantilla')

@section('title', 'Mostrar cursos '.$curso->name)
    
@section('content')
<h1>
    Bienvenido al curso: {{$curso->name}}
</h1>

<p>
    <strong>Categoria: {{$curso->categoria}}</strong>
</p>

<p>
    {{$curso->descripcion}}
</p>

<a href="{{route('cursos.index')}}">Home</a>
<br>
<a href=" {{route('cursos.edit', $curso)}} ">Editar Curso</a>

<form action=" {{route('cursos.destroy', $curso)}} " method="post">
    @csrf
    @method('delete')

    <button type="submit">Eliminar</button>
</form>

@endsection