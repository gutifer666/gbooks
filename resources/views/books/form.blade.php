<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">gBooks</a>

        <div class="collapse navbar-collapse">
            <a class="btn btn-danger my-2 my-sm-0" href="/books/create">Añadir</a>
            <a class="btn btn-secondary my-2 my-sm-0" href="/books">Catálogo</a>
        </div>>
    </nav>
    <div id="app" class="container">
        <section class="text-center m-4">
            <h1>Añadir libro</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="/books">
                @csrf
                
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Título">
                </div>

                <div class="form-group">
                    <input type="text"  class="form-control" name="author" placeholder="Autor">
                </div>

                <div class="form-group">
                    <input type="year"  class="form-control" name="year" placeholder="Año de edición">
                </div>

                <div class="form-group">
                    <input type="text"  class="form-control" name="argument" placeholder="Argumento">
                </div>

                <div class="form-group">
                    <input type="text"  class="form-control" name="isbn" placeholder="ISBN">
                </div>
                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Añadir</button>
            </form>
        </section>
    </div>