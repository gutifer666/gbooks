@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Libro con el id indicado</h1>
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
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->argument }}</td>
                    <td>{{ $book->isbn }}</td>
                </tr>                    
            </tbody>
        </table>
    </section>
</div>
@endsection