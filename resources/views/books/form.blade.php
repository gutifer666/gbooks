@extends('layout')
@section('content')
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
            <input type="text" class="form-control" name="title" placeholder="Título" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <input type="text"  class="form-control" name="author" placeholder="Autor">
            </div>

            <div class="form-group">
                <input type="year"  class="form-control" name="year" placeholder="Año de edición">
            </div>

            <div class="form-group">
                <textarea class="form-control" name="argument" placeholder="Argumento"></textarea>
            </div>

            <div class="form-group">
                <input type="text"  class="form-control" name="isbn" placeholder="ISBN">
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Añadir</button>
        </form>
    </section>
</div>
@endsection