@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Lista de autores</h1>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nacionalidad</th>
                    <th>Año de nacimiento</th>
                    <th>Libros</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->nationality }}</td>
                    <td>{{ $author->year }}</td>
                    <td>{{ $author->books }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection