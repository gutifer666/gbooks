@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Libro con el id indicado</h1>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Lugar de nacimiento</th>
                    <th>Año</th>
                    <th>Libros</th>
                </tr>
            </thead>
            <tbody>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->nationality }}</td>
                    <td>{{ $author->year }}</td>
                    <td>{{ $author->books }}</td>
                </tr>                    
            </tbody>
        </table>
    </section>
</div>
@endsection