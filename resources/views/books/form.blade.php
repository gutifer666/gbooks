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
            <a class="btn btn-danger my-2 my-sm-0" href="/books/add">Añadir</a>
            <a class="btn btn-secondary my-2 my-sm-0" href="/books/list">Catálogo</a>
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

            <form method="post" action="/books/add">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="titulo" placeholder="Título">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" name="autor" class="form-control" placeholder="Autor">
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Añadir</button>
            </form>
        </section>
    </div>