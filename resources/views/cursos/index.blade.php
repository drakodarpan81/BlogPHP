@extends('layouts.plantilla')

@section('title', 'Cursos')
    
@section('content')

<h1 class="text-3xl font-bold underline">
    Bienvenido a la página cursos
</h1>

<a href="{{route('cursos.create')}}">Crear curso</a>
<br>



<table class="table-auto">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Caracteristica</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $c)
            <tr>
                <td> <a href=" {{route('cursos.show', $c)}} ">{{ $c->name }}</a> </td>
                <td> {{ $c->descripcion }} </td>
                <td> {{ $c->caracteristica }} </td>
                <td> 
                    <a href=" {{route('cursos.edit', $c)}} ">Editar</a> 
                    <a href=" {{route('cursos.destroy', $c)}} ">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$cursos->links()}}

@endsection
