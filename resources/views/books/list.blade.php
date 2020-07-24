<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">gBooks</a>

        <div class="collapse navbar-collapse">
            <a class="btn btn-danger my-2 my-sm-0" href="/books/create">Añadir</a>
            <a class="btn btn-secondary my-2 my-sm-0" href="/books">Catálogo</a>
        </div>
    </nav>
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
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->argument }}</td>
                        <td>{{ $book->isbn }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>