@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Añadir autor</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="/authors">
            @csrf
            
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nombre">
            </div>

            <div class="form-group">
                <input type="text"  class="form-control" name="nationality" placeholder="Lugar de nacimiento">
            </div>

            <div class="form-group">
                <input type="year"  class="form-control" name="year" placeholder="Año de nacimiento">
            </div>

            <div class="form-group">
                <textarea class="form-control" name="books" placeholder="Libros"></textarea>
            </div>
           
            <button class="btn btn-primary btn-lg btn-block" type="submit">Añadir</button>
        </form>
    </section>
</div>
@endsection