@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Lista de libros</h1>
        <table class="table" cellspacing="0">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Argumento</th>
                    <th>ISBN</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->argument }}</td>
                    <td>{{ $book->isbn }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection